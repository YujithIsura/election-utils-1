@push('scripts')
    <script>
  //------------------------------------------------------------------------
      $("select[name='election']").change(function () {
        var election_id = $("select[name='election']").val();
        if (election_id !== '' && election_id !== null) {
          $("select[name='district']").prop('disabled',
          false).find('option[value]').remove();

          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
              method: 'POST',
              url: '/getDistrict',
              data: {id: election_id },
              
              success: function(response){
                $.each(response, function (key, value) {
                $("select[name='district']")
                    .append($("<option></option>")
                    .attr("value", key)
                    .text(value));
            });      
            },
              error: function(response){
                 
              }
          });

          $.ajax({
            type: 'POST',
            url: {{ url('/getDistrict') }}, 
            data: {id: election_id },
            })
            .done(function (data) {
              $.each(data, function (key, value) {
                $("select[name='district']")
                    .append($("<option></option>")
                    .attr("value", key)
                    .text(value));
            });
          })
          .fail(function(jqXHR, textStatus){
              console.log(jqXHR);
          });


      } else {
          $("select[name='district']").prop('disabled', 
          true).find("option[value]").remove();
      }
    });
    // ------------------------------------------------------------------------
    </script>

  

  @ndpush