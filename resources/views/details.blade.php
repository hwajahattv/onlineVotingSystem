<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div style="display: flex; align-content: center; justify-content: center; margin-top: 5rem;">
    <div class="card">
        <h5 class="card-header">Details of a release</h5>
        <div class="card-body">
            <p class="card-text">ID: {{$release['id']}}</p>
            <p class="card-text">Origin: {{$release['origin']}}</p>
            <p class="card-text">Language: {{$release['language']}}</p>
            <p class="card-text">Headline: {{$release['headline']}}</p>
            <p class="card-text">Contact: {{$release['contact']}}</p>
            <p class="card-text">Summary: {{$release['summary']}}</p>
            <p class="card-text">Released: {{$release['released']}}</p>
            <p class="card-text">Release Date: {{$release['releaseDate']}}</p>
            <p class="card-text">Modified: {{$release['modified']}}</p>
            <p class="card-text">Modified Date: {{$release['modifiedDate']}}</p>
            <p class="card-text">URL: {{$release['url']}}</p>
            <p class="card-text">PDF URL: {{$release['pdf_url']}}</p>
            <a href="/" class="btn btn-primary">Go back</a>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
