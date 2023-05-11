<x-layout>
    <div class="container">
        <div class="row m-5 p-4 shadow">
            <div class="col-12">
                <form method="POST" class="d-flex justify-content-center flex-column">
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" id="email">
                    </div>

                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password">
                    </div>

                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="remember">
                      <label class="form-check-label" for="remember">Ricordami</label>
                    </div>

                    <button type="submit" class="btn btn-primary">Accedi</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>