<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
      ul {
          background-color: #eee;
          cursor: pointer;
      }
      li {
          padding: 12px;
      }
    </style>

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <br/>
      <h1>Enter Country Name:</h1>

      <br/>
      <input type="text" name="country" id="country" class="form-control" placeholder="Country">
      <div id="countryList">
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            $('#country').keyup(function(){
                var query = $(this).val();
                if(query != '') {
                    $.ajax({
                        url:'search.php',
                        method: 'POST',
                        data: {
                            query: query
                        },
                        success:function(data) {
                            console.log('hi');
                            $('#countryList').fadeIn();
                            $('#countryList').html(data);
                        },
                        error:function(){
                            console.log('bye');
                        }
                    });
                }
            });

            $(document).on('click', 'li', function(){
                $('#country').val($(this).text());
                $('#countryList').fadeOut();
            });

        }); // End of document
    </script>
  </body>
</html>