<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header bg-primary">
                    <div class="card-title text-center font-weight-bold text-sm mb-0 text-uppercase text-light">Work from home</div>
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Please enter your name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Please enter your email">
                        </div>
                        <div class="form-group">
                            <label for="number">Number</label>
                            <input type="text" name="number" id="number" class="form-control" placeholder="Please enter your number">
                        </div>
                        <div class="form-group">
                            <label for="jobGroup">Please select category</label>
                            <select name="jobGroup" id="jobGroup" class="form-control">
                                <option>Choose Category</option>
                                <option value="wdev">Web Developer</option>
                                <option value="wdes">Web Designer</option>
                                <option value="gdes">Graphic Designer</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="resume">Upload Resume</label>
                            <div class="custom-file">
                                <input type="file" name="resume" class="custom-file-input" id="resume">
                                <label class="custom-file-label" for="resume">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                        </div>
                        <div class="form-group text-right">
                            <button class="btn-primary btn">SUBMIT</button>
                        </div>
                        <input type="hidden" value="store" name="method">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>