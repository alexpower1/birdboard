<!DOCTYPE html>
<html>
    <head>
        <title>Birdboard</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    </head>
    <body style="padding: 30px">
        <h1 class="heading is-1">Create a project<h1>
        
            <form method="POST" action="/projects" class="container" style="padding-top: 40px">
                @csrf

                <div class="field">
                    <label class="label" for="title">Title</label>

                    <div class="control">
                        <input type="text" class="input" name="title" placeholder ="Title">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="description">Description</label>

                    <div class="control">
                        <textarea name="description" class="textarea"></textarea>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-link">Create Project</button>
                    </div>
                </div>
            </form>
    </body>
</html>
