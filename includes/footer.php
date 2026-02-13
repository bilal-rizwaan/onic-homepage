    </div>
    <div class="modal modal-sm fade" id="login" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-container">
                        <div class="input-container">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name" />
                        </div>
                        <div class="input-container">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Enter Username" />
                        </div>
                        <div class="input-container">
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="Enter Email" />
                        </div>
                        <div class="input-container">
                            <label>Password</label>
                            <input type="text" class="form-control" placeholder="Enter Password" />
                        </div>
                        <button class="btn btn-primary">Login</button>
                        <div class="another-way">
                            <span>Another way to Join Now</span>
                            <div>
                                <a href="#!"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#!"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#!"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                        <p>Already have an Account? <a href="#" data-bs-toggle="modal"
                                data-bs-target="#existingUser">Sign In.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-sm fade" id="existingUser" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sign Up</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-container">
                        <div class="input-container">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Enter Name" />
                        </div>
                        <div class="input-container">
                            <label>Password <a href="#">Forgot Password</a></label>
                            <input type="text" class="form-control" placeholder="Enter Password" />
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Remember me
                            </label>
                        </div>
                        <button class="btn btn-primary">Sign In Now</button>
                        <div class="another-way">
                            <span>Another way to Sign in</span>
                            <div>
                                <a href="#!"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#!"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#!"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                        <p>Don't have an Account? <a href="#" data-bs-toggle="modal" data-bs-target="#login">Register
                                Now.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>