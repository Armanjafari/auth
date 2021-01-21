<!DOCTYPE html>
    <head>
        <title>Sending Mail</title>


        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">


    </head>
    <body>
        <center>
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

        <form action="{{ route('notifications.send.email') }}" class="form-group" method="POST">
            @csrf
                <label for="emails" class="form-control">Choose Your Email : </label>

                <select name="email_type" id="email_type">

                  @foreach ($emailTypes as $key => $type)
                  <option value="{{ $key }}">{{ $type }}</option>
                  @endforeach
                </select>

                <br><br>
                <label for="users" class="form-control">Choose Your User : </label>

                <select name="user" id="user">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach

                </select>
                {{ $errors }}


                <br> <br>
                <input type="submit" value="submit">
        </form></center>
        <script src="../jquery/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
