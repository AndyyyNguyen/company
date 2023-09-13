<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Do you want to DELETE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <a href="" type="button" class="btn btn-primary">Yes</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-title text-center">
                    <h4>Login</h4>
                </div>
                <div class="d-flex flex-column text-left">
                    <form action="?c=auth&a=login" method="POST" role="form" class="form-login">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Your email address..." required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Your password..." required>
                        </div>
                        <button type="submit" class="btn btn-info btn-block btn-round">Login</button>
                    </form>

                    <div class="text-center text-muted delimiter">or use a social network</div>
                    <div class="d-flex justify-content-center social-buttons">
                        <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip"
                            data-placement="top" title="Twitter">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip"
                            data-placement="top" title="Facebook">
                            <i class="fab fa-facebook"></i>
                        </button>
                        <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip"
                            data-placement="top" title="Linkedin">
                            <i class="fab fa-linkedin"></i>
                        </button>
                        </di>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <div class="signup-section">Not a member yet? <a href="#a" class="text-info"> Sign Up</a>.</div>
            </div>
        </div>
    </div>



    <script src="public/vendor/jquery-3.5.1.min.js"></script>
    <script src="public/vendor/popper.min.js"></script>
    <script src="public/vendor/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <script src="public/vendor/jquery-validation-1.19.3/dist/jquery.validate.min.js"></script>
    <script src="public/js/script.js"></script>
</div>
</body>

</html>