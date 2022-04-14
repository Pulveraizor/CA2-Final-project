@include('partials.header')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('authenticate') }}" method="POST">
                @csrf
                <div class="mb-3 row">
                    <label for="email" class="form-label">Email</label>
                    <div class="col">
                        <input type="email" class="form-control" id="email" placeholder="name@example.com"
                            name="email">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="form-label">Password</label>
                    <div class="col">
                        <input type="password" class="form-control" id="inputPassword" name="password">
                    </div>
                </div>
                <button class="btn btn-dark" type="submit">Log In</button>
            </form>
        </div>
    </div>
</div>
@include('partials.footer')
