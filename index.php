<!doctype html>
<html>
    <head>
        <title>Restrict keyboard character input with jQuery</title>
        <script src="jquery-3.2.1.min.js" type="text/javascript"></script>
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">     
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
            <form>
            <div class="form-group row">
            <label for="">Input 1 :</label>
            <input type='text' id='name' placeholder='Enter your name' class="form-control">
            <small id="emailHelp" class="form-text text-muted">not take a special character(eg. %&*$%)</small>
            </div>

            <div class="form-group row">
            <label for="">Input 2 :</label>
            <input type='text' id='age' placeholder='Enter your age' class="form-control">
            <small id="emailHelp" class="form-text text-muted">only takes numbers (eg.1,2,3,4)</small>
            </div>
            </form>
        </div>

        </div>
            </div>

            

        <!-- Script -->
        <script>
        $(document).ready(function(){
            $("#age").keypress(function(e){
                var keyCode = e.which;
                /*
                8 - (backspace)
                32 - (space)
                48-57 - (0-9)Numbers
                */
                if ( (keyCode != 8 || keyCode ==32 ) && (keyCode < 48 || keyCode > 57)) {    
                    return false;
                }
            });

            
            $("#name").keypress(function(e){
                var keyCode = e.which;
                
                /*    
                48-57 - (0-9)Numbers
                65-90 - (A-Z)
                97-122 - (a-z)
                8 - (backspace)
                32 - (space)
                */
                // Not allow special 
                if ( !( (keyCode >= 48 && keyCode <= 57) 
                    ||(keyCode >= 65 && keyCode <= 90) 
                    || (keyCode >= 97 && keyCode <= 122) ) 
                    && keyCode != 8 && keyCode != 32) {
                    e.preventDefault();
                }
            });
        });
        </script>
    </body>
</html>