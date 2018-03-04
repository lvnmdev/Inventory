<div class="container">
    <article>
        <section>
            <div>
                <h3 class="subTitle">REGISTRATION</h3>
            </div>
        </section>
        <section>
            <form action="<?= base_url('Main/register'); ?>" method="post">
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="email" name="email" placeholder="user@mail.com" required>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" type="text" name="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" type="text" name="name" placeholder="Juan" required>
                </div>
                <div class="form-group">
                    <label>Surname</label>
                    <input class="form-control" type="text" name="surname" placeholder="Dela Cruz" required>
                </div>
                <div class="form-group">
                    <label>Sex</label><br>
                    <input type="radio" name="sex" value="Male"> Male
                    <input type="radio" name="sex" value="Female"> Female
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label>Re-type Password</label>
                    <input class="form-control" type="password" name="repassword" placeholder="Re-type Password" required>
                </div>
                <div class="form-group">
                    <label>Billing Address</label>
                    <input class="form-control" type="text" name="bill-add" placeholder="Billing Address" required>
                </div>
                <div class="form-group">
                    <label>Deliver Address</label>
                    <input class="form-control" type="text" name="deliver-add" placeholder="Deliver Address" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn">Register</button>
                </div>
            </form>	
        </section>
        <section>
            <label>Do you have an account already?</label><br/>
            <a href="<?= base_url("Main/login"); ?>">	
                <button type="button" class="btn">Go to Login</button>
            </a>
        </section>
    </article>
</div>
    
    