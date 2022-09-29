<link rel="stylesheet" type="text/css" href="./../../assets/css/addVictim.css">

<div class="container m-auto p-4">
    <div id="notice" class="rounded-3 text-center m-auto p-4">
        <h4>Before filling out this form :</h4>
        <p>Please know that informations are verified before they are published</p>
    </div>
    <form action="" method="" id="addVictimForm" class="m-auto p-3">
        <fieldset class="rounded-3 p-3 mb-3" id="victimFieldset">
            <legend class="px-4 m-0">The victim</legend>
            <div class="form-group 
                        d-flex flex-wrap
                        justify-content-between align-items-center">
                <label for="firstName">
                    Victim's first name
                    <span class="required">*</span>
                </label>
                <input type="text" class="form-control" placeholder="Victim's first name" name="firstName"
                    size="50" autofocus required>
            </div>
            <div class="form-group 
                        d-flex  flex-wrap
                        justify-content-between align-items-center">
                <label for="lastName">
                    Her last name
                </label>
                <input type="text" class="form-control" placeholder="Victim's last name" name="lastName"
                    size="50">
            </div>
            <div class="form-group 
                        d-flex  flex-wrap
                        justify-content-between align-items-center">
                <label for="age">
                    Age
                    <span class="required">*</span>
                </label>
                <input type="text" name="age" id="age" placeholder="Age" maxlength="2" class="form-control"
                    required />
            </div>
            <div class="form-group
                        d-flex flex-wrap
                        justify-content-between align-items-center">
                <label for="countryOfOrigin">Country of origin</label>
                <select name="countryOfOrigin" id="countryOfOrigin" class="form-select">
                    <!-- JSON countries  -->
                </select>
            </div>
            <div class="form-group
                        d-flex flex-wrap
                        justify-content-between align-items-center">
                <label for="photo">Her photo</label>
                <input type="file" name="photo" id="photo" class="form-control">
            </div>
        </fieldset>
        <fieldset class="rounded-3 p-3 mb-3" id="crimeFieldset">
            <legend class="px-4 m-0">The Crime</legend>
            <div class="form-group
                        d-flex flex-wrap
                        justify-content-between align-items-center">
                <label for="typeOfCrime">
                    Type of crime
                    <span class="required">*</span>
                </label>
                <select name="typeOfCrime" id="typeOfCrime" class="form-select" required>
                    <option value="" disabled>-- please choose --</option>
                </select>
            </div>
            <div class="form-group
                        d-flex flex-wrap
                        justify-content-between align-items-center">
                <label for="">
                    Tool
                    <span class="required">*</span>
                </label>
                <select name="toolUsed" id="toolUsed" class="form-select" required>
                    <option value="" disabled>-- please choose --</option>
                </select>
            </div>
            <div class="form-group
                        d-flex flex-wrap
                        justify-content-between align-items-center">
                <label for="countryOfCrime">
                    Where crime took place
                    <span class="required">*</span>
                </label>
                <select name="countryOfCrime" id="countryOfCrime" class="form-select" required />
                <!-- JSON countries  -->
                </select>
            </div>
            <div class="form-group
                        d-flex flex-wrap
                        justify-content-between align-items-center">
                <label for="dateOfDeath">
                    Date of Death
                    <span class="required">*</span>
                </label>
                <input type="date" name="dateOfDeath" id="dateOfDeath" class="form-control" required />
            </div>
            <div class="form-group
                        d-flex flex-wrap
                        justify-content-between align-items-center">
                <label for="killer">
                    Killer
                    <span class="required">*</span>
                </label>
                <div id="killerList">
                    <input type="checkbox" name="killer" id="father" class="form-check-input" />Father <br />
                    <input type="checkbox" name="killer" id="brother" class="form-check-input" />Brother<br />
                    <input type="checkbox" name="killer" id="relative" class="form-check-input" />Other
                    relative<br />
                    <input type="checkbox" name="killer" id="husband" class="form-check-input" />Husband<br />
                    <input type="checkbox" name="killer" id="fiancee" class="form-check-input" />Fiancée<br />
                    <input type="checkbox" name="killer" id="nonRelative"
                        class="form-check-input" />Non-Relative<br />
                </div>
            </div>
        </fieldset>
        <fieldset class="rounded-3 p-3 mb-3" id="storyFieldset">
            <legend class="px-4 m-0">The Story</legend>
            <p class="p-2">What, how, where, why ..<br />all the details you can provide :
                <span class="required">*</span>
            </p>
            <textarea name="story" id="story" class="form-control my-2" required></textarea>
        </fieldset>
        <fieldset class="rounded-3 p-3 mb-3" id="punishmentFieldset">
            <legend class="px-4 m-0">The Punishment</legend>
            <p class="p-2">What did the local government do to punish the perpetrator ?
                <br />all the details you can provide :
                <span class="required">*</span>
            </p>
            <textarea name="punishment" id="punishment" class="form-control my-2" required></textarea>
        </fieldset>
        <fieldset class="rounded-3 p-3 mb-3" id="sourceFieldset">
            <legend class="px-4 m-0">The Source</legend>
            <p class="m-3">
                (For admins to accept to publish, please provide at least 3 sources)
            </p>
            <div class="form-group
                        d-flex flex-wrap
                        justify-content-between align-items-center">
                <label for="urlSource">
                    Source URL #1
                    <span class="required">*</span>
                </label>
                <input type="url" name="urlSource1" id="urlSource1" class="form-control" />
            </div>
            <div class="form-group
                        d-flex flex-wrap
                        justify-content-between align-items-center">
                <label for="urlSource">
                    Source URL #2
                    <span class="required">*</span>
                </label>
                <input type="url" name="urlSource2" id="urlSource2" class="form-control" />
            </div>
            <div class="form-group
                        d-flex flex-wrap
                        justify-content-between align-items-center">
                <label for="urlSource">
                    Source URL #3
                    <span class="required">*</span>
                </label>
                <input type="url" name="urlSource3" id="urlSource3" class="form-control" />
            </div>
            <div class="form-group
                        d-flex flex-wrap
                        justify-content-between align-items-center">
                <label for="urlSource">
                    Source URL #4
                    <span class="required">*</span>
                </label>
                <input type="url" name="urlSource4" id="urlSource4" class="form-control" />
            </div>
            <div class="form-group
                        d-flex flex-wrap
                        justify-content-between align-items-center">
                <label for="urlSource">
                    Source URL #5
                    <span class="required">*</span>
                </label>
                <input type="url" name="urlSource5" id="urlSource5" class="form-control" />
            </div>
        </fieldset>
        <div class="buttonContainer m-auto d-flex justify-content-evenly">
            <input type="reset" value="Reset" name="reset" class="btn btn-light">
            <input type="submit" value="Send" name"send" class="btn btn-light">
        </div>
    </form>
</div>

<script src="./../../../assets/js/addVictimForm.js"></script>