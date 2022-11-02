<?php   
    // -- -------------- ⏫ Page top --------------- --
    $title = "dashboard";
    require_once($_SERVER['DOCUMENT_ROOT'].
                '/views/components/back-office/top.php');
    require_once($_SERVER['DOCUMENT_ROOT'].
                '/controllers/victims/murder.controller.php');
    require_once($_SERVER['DOCUMENT_ROOT'].
                '/controllers/victims/fieldsPrefill.php');
?>

<!-- -------- 🎨 page specific stylesheets -------- -->
<link rel="stylesheet" type="text/css" href="./../../../assets/css/back-office/adminAdd.css">

<!-- -------------- 📄 page content --------------- -->
<?php if (isset($_SESSION['userID'])) : ?>

<div id="edit" class="container">

<form action="./../../../controllers/back-office/articlesManagement.php<?= '?id='. $article[0]->victim_id ?>" 
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
            size="50" autofocus required
            value="<?= strip_tags(htmlentities($article[0]->first_name)); ?>"
            >
    </div>
    <div class="form-group 
                d-flex  flex-wrap
                justify-content-between align-items-center">
        <label for="lastName">
            Her last name
            <span class="required">*</span>
        </label>
        <input type="text" class="form-control" placeholder="Victim's last name" name="lastName"
            size="50" required
            value="<?= strip_tags(htmlentities($article[0]->last_name)); ?>"
            >
    </div>
    <div class="form-group 
                d-flex  flex-wrap
                justify-content-between align-items-center">
        <label for="age">
            Age
            <span class="required">*</span>
        </label>
        <input type="text" name="age" id="age" placeholder="Age" maxlength="2" class="form-control"
            required 
            value="<?= strip_tags(htmlentities($article[0]->age)); ?>"
            />
    </div>
    <div class="form-group
                d-flex flex-wrap
                justify-content-between align-items-center">
        <label for="countryOfOrigin">
            Country of origin
            <span class="required">*</span>
        </label>
        <select name="countryOfOrigin" id="countryOfOrigin" class="form-select">
            <option value="" disabled>-- please choose --</option>
            <!-- JSON countries  -->
            <?php
                foreach ($json as $country)
                {
                    if ($country['code'] === $article[0]->country_origin)
                    {
                    echo "<option value=" . $country['code'] . " selected='selected'>" 
                            . $country['name'] . 
                         "</option>";
                    }
                    else
                    {
                        echo "<option value=" . $country['code'] . ">" 
                        . $country['name'] . 
                        "</option>";
                    }
                }
            ?>
        </select>
    </div>
    <div class="d-flex justify-content-center">
        <img class="mx-auto" src="./../../../uploads/<?= $article[0]->photo; ?>" alt="victim's photo" width="60%">
    </div>

    <div class="form-group
                d-flex flex-wrap
                justify-content-between align-items-center">
        <label for="photo">Her photo</label>
        <input type="file" name="photo" id="photo" class="form-control">
        <!-- ANCHOR write algorythm to keep photo if new one is not uploaded -->
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
            <option value="" disabled>-- please choose --</option>
            <?php
                foreach ($reason as $item)
                {
                    if($item->reason_id === $article[0]->reason_id)
                    {
                        echo 
                        "<option value=".$item->reason_id." selected='selected'>" 
                        .utf8_encode($item->reason_group).
                        "</option>";
                    }
                    else
                    {
                        echo 
                        "<option value=".$item->reason_id.">" 
                        .utf8_encode($item->reason_group).
                        "</option>";
                    }
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
                    if($item->tool_id === $article[0]->crime_tool)
                    {
                        echo 
                        "<option value=".$item->tool_id." selected='selected'>" 
                        .utf8_encode($item->tool_name).
                        "</option>";
                    }
                    else
                    {
                        echo 
                        "<option value=".$item->tool_id.">" 
                        .utf8_encode($item->tool_name).
                        "</option>";
                    }
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
        <option value="" disabled>-- please choose --</option>
        <!-- JSON countries  -->
        <?php
            foreach ($json as $country)
            {
                if ($country['code'] === $article[0]->country_crime)
                {
                echo "<option value=" . $country['code'] . " selected='selected'>" 
                        . $country['name'] . 
                        "</option>";
                }
                else
                {
                    echo "<option value=" . $country['code'] . ">" 
                    . $country['name'] . 
                    "</option>";
                }
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
        <input type="number" min='1950' max='2022' name="dateOfDeath" 
                id="dateOfDeath" class="form-control w-50" 
                value="<?= strip_tags(htmlentities($article[0]->date_of_death)); ?>" 
                required />
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
                    if ($item->perpetrator_id == $article[0]->perpetrator_id)
                    {
                        echo "<input type='radio' name='killer' id='" 
                        . $item->perpetrator_id .
                        "' value='".$item->perpetrator_id."'
                        class='form-radio-input' checked/> "
                        . utf8_encode($item->relationship) . "<br/>";
                    }
                    else
                    {
                        echo "<input type='radio' name='killer' id='" 
                        . $item->perpetrator_id .
                        "' value='".$item->perpetrator_id."'
                        class='form-radio-input'/> "
                        . utf8_encode($item->relationship) . "<br/>";
                    }
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
    <textarea name="story" id="story" class="form-control my-2" required>
<?= strip_tags(htmlentities($article[0]->story)); ?>
    </textarea>
    </fieldset>
<fieldset class="rounded-3 p-3 mb-3" id="punishmentFieldset">
    <legend class="px-4 m-0">The Punishment</legend>
    <p class="p-2">What did the local government do to punish the perpetrator ?
        <br />all the details you can provide :
        <span class="required">*</span>
    </p>
    <textarea name="punishment" id="punishment" class="form-control my-2" required>
<?= strip_tags(htmlentities($article[0]->punishment)); ?>
    </textarea>
</fieldset>
<fieldset class="rounded-3 p-3 mb-3" id="sourceFieldset">
    <legend class="px-4 m-0">The Source</legend>
    <div class="form-group
                d-flex flex-wrap
                justify-content-between align-items-center">
        <label for="twitterHash">
            Twitter Hashtag
        </label>
        <input type="url" name="twitterHash" id="twitterHash" class="form-control" 
        value="<?= strip_tags(htmlentities($article[0]->twitter_hashtag)); ?>"
        />
    </div>
    <div class="form-group
                d-flex flex-wrap
                justify-content-between align-items-center">
        <label for="urlSource">
            Source URL #1
            <span class="required">*</span>
        </label>

        <input type="url" name="urlSource1" id="urlSource1" class="form-control"
        value="<?= strip_tags(htmlentities($article[0]->source_1)); ?>" required/>
    </div>
    <div class="form-group
                d-flex flex-wrap
                justify-content-between align-items-center">
        <label for="urlSource">
            Source URL #2
        </label>
        <input type="url" name="urlSource2" id="urlSource2" class="form-control"
        value="<?= strip_tags(htmlentities($article[0]->source_2)); ?>"  />
    </div>
    <div class="form-group
                d-flex flex-wrap
                justify-content-between align-items-center">
        <label for="urlSource">
            Source URL #3
        </label>
        <input type="url" name="urlSource3" id="urlSource3" class="form-control"
        value="<?= strip_tags(htmlentities($article[0]->source_3)); ?>"  />
    </div>
    <div class="form-group
                d-flex flex-wrap
                justify-content-between align-items-center">
        <label for="urlSource">
            Source URL #4
        </label>
        <input type="url" name="urlSource4" id="urlSource4" class="form-control"
        value="<?= strip_tags(htmlentities($article[0]->source_4)); ?>"  />
    </div>
    <div class="form-group
                d-flex flex-wrap
                justify-content-between align-items-center">
        <label for="urlSource">
            Source URL #5
        </label>
        <input type="url" name="urlSource5" id="urlSource5" class="form-control"
        value="<?= strip_tags(htmlentities($article[0]->source_5)); ?>"  />
    </div>
</fieldset>
<div class="buttonContainer m-auto d-flex justify-content-evenly">
    <a href="./../../../controllers/victims/delete.php?id=<?= $article[0]->victim_id ?>" 
        class="btn btn-danger"  onclick="return confirm('⚠ This action is irreversible')">
        Delete
    </a>
    <input type="submit" value="Approve" name="submit" class="btn btn-success">
</div>
</form>

</div>

<!-- -------------- ⏬ Page Bottom --------------- -->
<?php require_once($_SERVER['DOCUMENT_ROOT'].
                    '/views/components/back-office/footer.php'); ?>

<!---------------- 📜 scripts used ---------------->
<script type="application/javascript" src="./../../../assets/js/back-office/adminDashboard.js"></script>

<?php endif; ?>