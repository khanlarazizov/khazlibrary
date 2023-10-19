<div class="modal fade" id="addAccount" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <form action="" method="POST" class="form form2" id="addAccountForm">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Qeydiyyat</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="name-surname">
                        <input type="text" name="name" id="name" class="signup-name" placeholder="Name" required>
                        <span id="nameError" class="text-danger error-message"></span>

                        <input type="text" name="surname" id="surname" class="signup-surname" placeholder="Surname"
                               required>
                        <span id="surnameError" class="text-danger error-message"></span>
                    </div>

                    <input type="email" name="email" id="email" class="signup-email" placeholder="Email" required>
                    <span id="emailError" class="text-danger error-message"></span>

                    <input type="password" class="signup-pass" name="password" placeholder="Password" required/>
                    <span id="passwordError" class="text-danger error-message"></span>

                    <div class="birthdate">
                        <label for="birthdate">Birthday</label>
                        <input type="date" id="birthdate" name="birthdate" required/>
                        <span id="birthDateError" class="text-danger error-message"></span>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary signup-btn">Sign up</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </form>
</div>

