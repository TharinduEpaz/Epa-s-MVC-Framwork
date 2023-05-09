<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT . '/public/css/form.css';?>">
    <link rel="stylesheet" href="<?php echo URLROOT . '/public/css/sidebar.css';?>">
    <link rel="stylesheet" href="<?php echo URLROOT . '/public/css/sELL_ITEM.css';?>">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js" ></script> -->
    <script src="https://kit.fontawesome.com/128d66c486.js" crossorigin="anonymous"></script>
    <title>Edit Advertisement</title>
</head>
<body>
<?php require_once APPROOT . '/views/sellers/navbar.php';?>

    <div class="container_add">
        <div class="sidebar">
                <a href="#"><i class="fas fa-qrcode"></i> <span>Dashboard</span></a>
                <a href="#"> <i class="fa fa-cog" aria-hidden="true"></i><span>Profile Settings</span></a>
                <a href="<?php echo URLROOT;?>/sellers/advertisements"> <i class="fa fa-ad" aria-hidden="true"></i><span>Advertisements</span></a>
                <a class="current" href="<?php echo URLROOT;?>/sellers/advertise"><i class="fa-solid fa-dollar-sign" aria-hidden="true"></i><span>Repost</span></a>
                <a href="#"> <i class="fa fa-comments"></i><span>Messages</span></a>       
        </div>
        <div class="container">
        <div class="advertisement">
            <div class="add">
                <div id="forms" class="form_seller">
                    <form action="<?php echo URLROOT . '/sellers/repost/'.$data['id'];?>" method="post" enctype="multipart/form-data">
                    <?php
                                    if(!empty($data['title_err'])){
                                    echo '<div class="error">';
                                        echo '*'.$data['title_err'].'<br>';
                                    echo '</div>';
                                    }
                                ?> 
                        <div class="input">
                            <label for="">Title&nbsp</label>
                            <input class="title" type="text" name="title"  value="<?php echo $data['title']?>" >
                        </div>
                        <?php if(!empty($data['price_err'])){
                                    echo '<div class="error">';
                                        echo '*'.$data['price_err'].'<br>';
                                    echo '</div>';
                                    }
                                ?> 
                        <div class="input">
                            <label for="">Price</label>
                            <input class="price" type="number" name="price"  value="<?php echo $data['price']?>"  >
                        </div>
                        <div class="input">
                            <label class="date" style="display:block;text-align:left" for="date">Ending Date</label>
                            <!-- <label class="date" for="date">Ending Date</label> -->
                            <select  style="display:block" name="date" id="category" class="date">
                              <option value="1">1day</option>
                              <option value="3">3day</option>
                              <option value="5">5day</option>
                              <option value="7">7day</option>

                            </select>
                        </div>
                        <?php
                                    if(!empty($data['image1_err']) || !empty($data['image2_err']) || !empty($data['image3_err'])){
                                        echo '<div class="error" style="margin-bottom:5px">';
                                        if(!empty($data['image1_err'])){
                                            echo '*'.$data['image1_err'].'<br>';
                                        echo '</div>';
                                        }
                                        if(!empty($data['image2_err'])){
                                                echo '*'.$data['image2_err'].'<br>';
                                            echo '</div>';
                                        }
                                        if(!empty($data['image3_err'])){
                                                echo '*'.$data['image3_err'].'<br>';
                                            }
                                            echo '</div>';
                                    }
                                ?> 
                        <div class="input_image">
                            <div class="image">

                                    <input type="file" name="image1" id="file" class="custom-file-input">
                            </div>
                            <div class="image">
                                <input type="file" name="image2" class="custom-file-input" >
                            </div>
                            <div class="image">
                                <input type="file" name="image3"  class="custom-file-input">
                            </div>
                            <div class="image">
                                <input type="file" name="image4"  class="custom-file-input">
                            </div>
                            <div class="image">
                                <input type="file" name="image5"  class="custom-file-input">
                            </div>
                            <div class="image">
                                <input type="file" name="image6"  class="custom-file-input">
                            </div>
                        </div>
                        <div class="input">
                            <label class="condition" for="condition">Condition</label>
                            <select name="condition" id="category" class="category">
                              <option value="Used">Used</option>
                              <option value="New">New</option>
                            </select>
                            <!-- <input class="condition" type="text" name="condition"   value="<?php echo $data['condition']?>" > -->
                        </div>
                        <?php
                                    if(!empty($data['category_err'])){
                                    echo '<div class="error">';
                                        echo '*'.$data['category_err'].'<br>';
                                    echo '</div>';
                                    }
                                ?> 
                        <div class="input" style="flex-wrap: wrap;">
                        <label>Category:</label>
                        <div class="input">
                            <input type="checkbox" name="category[]" value="Microphone" id="chkMicrophone">
                            <label for="chkMicrophone">Microphone</label>

                            <input type="checkbox" name="category[]" value="DJ" id="chkDJ">
                            <label for="chkDJ">DJ</label>

                            <input type="checkbox" name="category[]" value="Mixer" id="chkMixer">
                            <label for="chkMixer">Mixer</label>
                            
                            <input type="checkbox" name="category[]" value="Mixer" id="chkMixer">
                            <label for="chkMixer">Percussion/Drums</label>
                        </div>
                            <div class="input">
                                <input type="checkbox" name="category[]" value="Amplifier" id="chkAmplifier">
                                <label for="chkAmplifier">Amplifier</label>
    
                                <input type="checkbox" name="category[]" value="Guitar" id="chkGuitar">
                                <label for="chkGuitar">Guitar</label>
    
                                <input type="checkbox" name="category[]" value="Keyboard" id="chkKeyboard">
                                <label for="chkKeyboard">Keyboard</label>
    
                                <input type="checkbox" name="category[]" value="Drumset" id="chkDrumset">
                                <label for="chkDrumset">Other</label>
                            </div>
                        </div>

                        <div class="input">
                            <label class="district" for="district">Select a district&nbsp</label>
                            <select name="district" id="category">
                                <option value="Ampara">Ampara</option>
                                <option value="Anuradhapura">Anuradhapura</option>
                                <option value="Badulla">Badulla</option>
                                <option value="Batticaloa">Batticaloa</option>
                                <option value="Colombo">Colombo</option>
                                <option value="Galle">Galle</option>
                                <option value="Gampaha">Gampaha</option>
                                <option value="Hambantota">Hambantota</option>
                                <option value="Jaffna">Jaffna</option>
                                <option value="Kalutara">Kalutara</option>
                                <option value="Kandy">Kandy</option>
                                <option value="Kegalle">Kegalle</option>
                                <option value="Kilinochchi">Kilinochchi</option>
                                <option value="Kurunegala">Kurunegala</option>
                                <option value="Mannar">Mannar</option>
                                <option value="Matale">Matale</option>
                                <option value="Matara">Matara</option>
                                <option value="Monaragala">Monaragala</option>
                                <option value="Mullaitivu">Mullaitivu</option>
                                <option value="Nuwara Eliya">Nuwara Eliya</option>
                                <option value="Polonnaruwa">Polonnaruwa</option>
                                <option value="Puttalam">Puttalam</option>
                                <option value="Ratnapura">Ratnapura</option>
                                <option value="Trincomalee">Trincomalee</option>
                                <option value="Vavuniya">Vavuniya</option>

                            </select>
                        </div>

                        <?php
                                    if(!empty($data['model_err'])){
                                    echo '<div class="error">';
                                        echo '*'.$data['model_err'].'<br>';
                                    
                                    echo '</div>';
                                    }
                                ?> 
                        <div class="input">
                            <label class="model" for="">Model No.</label>
                            <input class="model" type="text" name="model"   value="<?php echo $data['model']?>" >
                        </div>

                        <?php
                                    if(!empty($data['brand_err'])){
                                    echo '<div class="error">';
                                        echo '*'.$data['brand_err'].'<br>';
                                    echo '</div>';
                                    }
                                ?> 
                        <div class="input">
                            <label class="brand" for="">Brand Name</label>
                            <input class="brand" type="text" name="brand"   value="<?php echo $data['brand']?>" >
                        </div>

                        <?php
                                    if(!empty($data['description_err'])){
                                    echo '<div class="error">';
                                        echo '*'.$data['description_err'].'<br>';
                                    echo '</div>';
                                    }
                                ?> 
                        <div class="input">
                            <label class="descriptionl" for="">Description</label>
                            <textarea name="description" id="description" class="description" cols="30" rows="15"  value="" maxlength=""><?php echo $data['description']?></textarea>
                            
                        </div>
                        <div class="submit">
                            <input type="submit" name="submit" value="Repost" class="post">
                            <a class="cancel" href="<?php echo URLROOT;?>/sellers/bid_list/<?php echo $data['id']?>">Cancel</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>

            
        </div>
    </div>
</body>
<script src="<?php echo URLROOT . '/public/js/form.js';?>"></script>

</html>

