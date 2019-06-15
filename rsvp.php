<!DOCTYPE html>
<html lang="en">

<body>
<div class="container" name="body">
    <div class="row">
        <!-- left side of the body -->
        <div class="col-sm-6" id="leftCol" name="left side">
            <div class="container" id="RSVPreg" name="RSVP">
                <div class="container" id="RSVP">
                    <a name="reg"><h2>Registration</h2></a>
                    <b><p>Please fill your details and then proceed to submit</p></b>
                    <p>Make sure you fill the right data in the right place!</p>
                    <?php
                    $nameErr = $emailErr = $arrivalErr = $phoneErr = $guestsErr = "";
                    $name = $email = $arrival = $guests = $phone = "";
                    $flagPhone = $flagName = $flagMail = $flagGuests = $flagArrival = false;
                    $flag = false;

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (empty($_POST["Name"])) {
                            $nameErr = "Name is required";
                            $flagName = false;
                        } else {
                            $name = test_input($_POST["Name"]);
                            $flagName = true;
                            // check if name only contains letters and whitespace
                            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                                $nameErr = "Only letters and white space allowed";
                                $flagName = false;
                            }
                        }

                        if (empty($_POST["Phone"])) {
                            $phoneErr = "Phone is required";
                            $flagPhone = false;
                        } else {
                            $phone = test_input($_POST["Phone"]);
                            $flagPhone = true;
                            if (!preg_match("/^[0-9]{9,10}$/", $phone)) {
                                $phoneErr = "Only Numbers and must be 9 or 10 digits";
                                $flagPhone = false;
                            }
                        }

                        if (empty($_POST["mail"])) {
                            $emailErr = "Email is required";
                            $flagMail = false;
                        } else {
                            $email = test_input($_POST["mail"]);
                            $flagMail = true;
                            // check if e-mail address is well-formed
                            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                $emailErr = "Invalid email format";
                                $flagMail = false;
                            }
                        }
                        if (empty($_POST["numOfGuests"])) {
                            $guestsErr = "Number of guests is required";
                            $flagGuests = false;
                        } else {
                            $guests = test_input($_POST["numOfGuests"]);
                            $flagGuests = true;
                            if ($guests < 0) {
                                $guestsErr = "Must be equal or greater than 0";
                                $flagGuests = false;
                            }
                        }

                        if (empty($_POST["opt"])) {
                            $arrivalErr = "Arrival method is required";
                            $flagArrival = false;
                        } else {
                            $arrival = test_input($_POST["opt"]);
                            $flagArrival = true;
                        }
                        if ($flagGuests && $flagMail && $flagPhone && $flagArrival && $flagName) {
                            $flag = true;
                            $flagPhone = $flagName = $flagMail = $flagGuests = $flagArrival = false;
                        }
                        if ($flag) {
                              if ($guests == 1) {
                                echo "<div class='alert alert-success' role='alert'>Thanks,  " . $name . "!" . "<br>We will see you and your #" . $guests . " friend!(maybe only)</div>";
                            } else {
                                echo "<div class='alert alert-success' role='alert'>Thanks,  " . $name . "!" . "<br>We will see you with your " . $guests . " friends</div>";
                            }
                        }

                    }
                    function test_input($data)
                    {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }


                    ?>
                    <form method="post" name="formi" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="form-group" name="full name" value="<?php echo $name; ?>">
                            <label for="fullname">Full name:</label>
                            <input class="form-control" id="fullname" name="Name" placeholder="Only letters and spaces."
                                   type="text">
                            <span class="error"> <?php echo $nameErr; ?></span>
                            <!--
                            <div class="valid-feedback">Great success! <img alt="borat"
                                                                            class="rounded-circle"
                                                                            src="IMG/Form/borat.jpg">
                            </div>
                            <div class="invalid-feedback">If you fill this field it would be great! <img
                                        alt="it would be great"
                                        class="rounded-circle"
                                        src="IMG/Form/great.jpg">
                            </div>
                            -->
                        </div>
                        <div class="form-group" name="phone number" value="<?php echo $phone; ?>">
                            <label for="Phone">Phone number:</label>
                            <input class="form-control" id="Phone" name="Phone"
                                   placeholder="Only numbers; Must be 9 or 10 digits." type="tel"
                            >
                            <span class="error"> <?php echo $phoneErr; ?></span>
                            <!--
                            <div class="valid-feedback">Great success! <img alt="borat"
                                                                            class="rounded-circle"
                                                                            src="IMG/Form/borat.jpg">
                            </div>
                            <div class="invalid-feedback">If you fill this field it would be great! <img
                                        alt="it would be great"
                                        class="rounded-circle"
                                        src="IMG/Form/great.jpg">
                            </div>
                            -->
                        </div>
                        <div class="form-group" name="email" value="<?php echo $email; ?>">
                            <label for="mail">E-mail:</label>
                            <input class="form-control" id="mail" name="mail" placeholder="Enter your E-mail address"
                                   type="email">
                            <span class="error"> <?php echo $emailErr; ?></span>

                            <!--
                            <div class="valid-feedback">Great success! <img alt="borat"
                                                                            class="rounded-circle"
                                                                            src="IMG/Form/borat.jpg">
                            </div>
                            <div class="invalid-feedback">If you fill this field it would be great! <img
                                        alt="it would be great"
                                        class="rounded-circle"
                                        src="IMG/Form/great.jpg">
                            </div>
                            -->
                        </div>
                        <div class="form-group" name="guests" value="<?php echo $guests; ?>">
                            <label for="numOfGuests">Number of guests:</label>
                            <input class="form-control" id="numOfGuests" name="numOfGuests"
                                   placeholder="Must be greater than 0"
                                   type="number">
                            <span class="error"> <?php echo $guestsErr; ?></span>
                            <!--
                            <div class="valid-feedback">Great success! <img alt="borat"
                                                                            class="rounded-circle"
                                                                            src="IMG/Form/borat.jpg">
                            </div>
                            <div class="invalid-feedback">If you fill this field it would be great! <img
                                        alt="it would be great"
                                        class="rounded-circle"
                                        src="IMG/Form/great.jpg">
                            </div>
                            -->
                        </div>
                        <div name="arrival method" class="container text-center">How will you come?
                            <br>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio"
                                           name="opt" <?php if (isset($arrival) && $arrival == "Shuttle") echo "checked"; ?>
                                           value="Shuttle">Shuttle
                                    <input class="form-check-input" type="radio"
                                           name="opt" <?php if (isset($arrival) && $arrival == "Independently") echo "checked"; ?>
                                           value="Independently">Independently
                                    <br>
                                    <span class="error"> <?php echo $arrivalErr; ?></span>
                                </label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group text-center" name="additional info">
                            <label for="addComment">Any last words?</label> <br>
                            <textarea cols="30" id="addComment" maxlength="200" name="addComment" rows="5"></textarea>
                            <br>
                            <span id="chars">200</span> characters remaining
                        </div>
                        <div class="container text-center" name="submit">
                            <button class="btn btn-primary" type="submit">Submit</button>
                            <input class="btn btn-primary" name="Reset" type="reset" value="Reset">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <hr class="d-sm-none">
</body>
</html>


