
        <!--Feedback Start Here-->
        <div class="col-sm-4 text-center">
            <div class="panel panel-primary">
                <div class="panel-heading">Feedback</div>
                <div class="panel-body">
                    <?php echo @$msg; ?>
                    <div class="feedback">
                        <form method="post"><br>
                            <div class="form-group">
                                <input type="text" name="n" class="form-control" id="#"placeholder="Enter Your Name"required>
                            </div>
                            <div class="form-group">
                                <input type="Email" name="e" class="form-control" id="#"placeholder="Email"required>
                            </div>
                            <div class="form-group">
                                <input type="Number" name="mob" class="form-control" id="#"placeholder="Mobile Number"required>
                            </div>
                            <div class="form-group">
                                <textarea type="Text" name="msg" class="form-control" id="#"placeholder="Type Your Massage"required></textarea>
                            </div>
                            <input type="submit" value="send" name="send" class="btn btn-primary btn-group-justified"required>
                        </form>     
                    </div>
                </div>
            </div>
        </div>

        <!--Feedback Panel Close here-->