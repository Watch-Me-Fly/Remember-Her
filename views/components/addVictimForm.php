<?php 

    require_once('controllers/victims/fieldsPrefill.php');
    
?>

<form action="controllers/addMurder.controller.php" 
        method="POST" enctype="multipart/form-data" 
        id="addVictimForm" class="m-auto p-3"
>
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
                <span class="required">*</span>
            </label>
            <input type="text" class="form-control" placeholder="Victim's last name" name="lastName"
                size="50" required>
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
            <label for="countryOfOrigin">
                Country of origin
                <span class="required">*</span>
            </label>
            <select name="countryOfOrigin" id="countryOfOrigin" class="form-select">
                <option value="" disabled selected="selected">-- please choose --</option>
                <!-- JSON countries  -->
                <?php
                    foreach ($json as $country)
                    {
                        echo "<option value=" . $country['code'] . ">" 
                                . $country['name'] . 
                             "</option>";
                    }
                ?>
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
            <label for="reasonForCrime">
                Reason behind the crime
                <span class="required">*</span>
            </label>
            <select name="reasonForCrime" id="reasonForCrime" class="form-select" required>
                <option value="" disabled selected="selected">-- please choose --</option>
                <?php
                    foreach ($reason as $item)
                    {
                        echo 
                        "<option value=".$item->reason_id.">" 
                        .utf8_encode($item->reason_group).
                        "</option>";
                    }
                ?>
            </select>
        </div>
        <div class="form-group
                    d-flex flex-wrap
                    justify-content-between align-items-center">
            <label for="toolUsed">
                Tool
                <span class="required">*</span>
            </label>
            <select name="toolUsed" id="toolUsed" class="form-select" required>
                <option value="" disabled selected="selected">-- please choose --</option>
                <?php
                    foreach ($tool as $item)
                    {
                        echo 
                        "<option value=".$item->tool_id.">" 
                        .utf8_encode($item->tool_name).
                        "</option>";
                    }
                ?>
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
            <option value="" disabled selected="selected">-- please choose --</option>
            <!-- JSON countries  -->
            <?php
                foreach ($json as $country)
                {
                    echo "<option value=" . $country['code'] . ">" 
                            . $country['name'] . 
                         "</option>";
                }
            ?>
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
                <?php
                    foreach ($perpetrator as $item)
                    {
                        echo "<input type='radio' name='killer' id='" 
                        . $item->perpetrator_id .
                        "' value='".$item->perpetrator_id."'
                        class='form-radio-input' /> "
                        . utf8_encode($item->relationship) . "<br/>";
                    }
                ?>
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
            <label for="twitterHash">
                Twitter Hashtag
            </label>
            <input type="url" name="twitterHash" id="twitterHash" class="form-control" />
        </div>
        <div class="form-group
                    d-flex flex-wrap
                    justify-content-between align-items-center">
            <label for="urlSource">
                Source URL #1
                <span class="required">*</span>
            </label>
            <input type="url" name="urlSource1" id="urlSource1" class="form-control" required/>
        </div>
        <div class="form-group
                    d-flex flex-wrap
                    justify-content-between align-items-center">
            <label for="urlSource">
                Source URL #2
            </label>
            <input type="url" name="urlSource2" id="urlSource2" class="form-control" />
        </div>
        <div class="form-group
                    d-flex flex-wrap
                    justify-content-between align-items-center">
            <label for="urlSource">
                Source URL #3
            </label>
            <input type="url" name="urlSource3" id="urlSource3" class="form-control" />
        </div>
        <div class="form-group
                    d-flex flex-wrap
                    justify-content-between align-items-center">
            <label for="urlSource">
                Source URL #4
            </label>
            <input type="url" name="urlSource4" id="urlSource4" class="form-control" />
        </div>
        <div class="form-group
                    d-flex flex-wrap
                    justify-content-between align-items-center">
            <label for="urlSource">
                Source URL #5
            </label>
            <input type="url" name="urlSource5" id="urlSource5" class="form-control" />
        </div>
    </fieldset>
    <div class="buttonContainer m-auto d-flex justify-content-evenly">
        <input type="reset" value="Reset" name="reset" class="btn btn-light">
        <input type="submit" value="Send" name="submit" class="btn btn-light">
    </div>
</form>

<script src="./../../assets/js/libraries/jquery-3.6.1.min.js" type="application/javascript"></script>