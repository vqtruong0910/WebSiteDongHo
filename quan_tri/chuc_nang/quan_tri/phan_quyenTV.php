<style>

body{
    font-family: arial;
    padding: 0;
    margin: 0;
    font-size: 14px;
}
.container{
    width: 1200px;
    margin: 0 auto;
}
h1{
    text-align: center;
}
.listing-items{
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 0 0 10px 10px;
}

.listing-items ul{
    padding: 0;
    margin: 0;
}
.listing-prop{
    float: right;
    border-left: 1px solid #ccc;
    line-height: 90px;
    padding: 0 10px;
}
.listing-img{
    width: 110px;
    height: 90px;
    float: left;
}
.listing-img img{
    width: 100px;
    padding: 5px;
    height: 80px;
}
.listing-fullname,
.listing-username,
.listing-name{
    padding-left: 10px;
    border-right: 0;
    float: left;
    width: 170px;
    max-height: 90px;
    overflow: hidden;
}
.listing-fullname{
    width: 230px;
}
.listing-privilege{
    width: 100px;
    text-align: center;
}
.listing-username{
    width: 100px;
}
.listing-button{
    float: right;
    border-left: 1px solid #ccc;
    border-right: 0;
    padding: 0 10px;
    width: 50px;
    text-align: center;
}
.clear-both{
    clear: both;
}
.listing-items ul li{
    list-style: none;
    border: 1px solid #ccc;
    border-top: 0;
    border-left: 0;
}
.listing-items ul li:first-child{
    border-top: 1px solid #ccc;
}
.listing-time{
    width: 150px;
    text-align: center;
}
.listing-item-heading{
    text-align: center;
    font-weight: bold;
}
.listing-item-heading .listing-prop{
    height: 40px;
    line-height: 40px;
    background: #717171;
    color: #FFF;
}
.buttons{
    text-align: right;
    font-weight: bold;
    font-size: 16px;
    margin-bottom: 15px;
    line-height: 38px;
}
.buttons a{
    color: #FFF;
    padding: 10px;
    background: #000;
}
a{
    text-decoration: none;
}
a:hover{
    text-decoration: underline;
}
#admin-heading-panel{
    background: #717171;
    height: 50px;
    line-height: 50px;
    color: #fff;
}
#admin-heading-panel a{
    color: #fff;
}
.left-panel{
    float: left;
}
.left-panel span{
    color: #eeff09;
    font-weight: bold;
}
.right-panel{
    float: right;
}
.right-panel img{
    vertical-align: middle;
}
.right-panel a{
    margin-right: 10px;
}
.left-menu{
    float: left;
    width: 280px;
}
.main-content{
    float: left;
    width: 900px;
    margin-left: 20px;
}
.main-content h1{
    margin: 0;
    text-align: left;
    background: #525151;
    color: #fff;
    font-size: 18px;
    font-weight: normal;
    line-height: 40px;
    border-radius: 10px 10px 0 0;
    padding: 0 10px;
}
#admin-footer{
    background: #717171;
    padding: 5px 0;
    line-height: 60px;
    color: #FFF;
}
#content-wrapper .container{
    padding: 15px 0;
}
.menu-heading{
    background: #525151;
    line-height: 20px;
    padding: 10px;
    color: #FFF;
    border-radius: 10px 10px 0 0;
    font-size: 18px;
}
.menu-items ul{
    margin: 0;
    padding: 0;
}
.menu-items ul li{
    list-style: none;
    line-height: 30px;
    border-bottom: 1px dashed #ccc;
    padding-left: 15px;
}
.menu-items ul li a{
    color: #000;
}
.menu-items ul li:first-child{
    border-top: 0;
}
.menu-items{
    padding: 0 0px 15px 0px;
    border: 1px solid #ccc;
    border-radius: 0 0 10px 10px;
}
#pagination{
    text-align: right;
    margin-top: 15px;
}
.page-item{
    border: 1px solid #ccc;
    padding: 5px 9px;
    color: #000;
}
.current-page{
    background: #000;
    color: #FFF;
}
#listing-editing{
    border: 1px solid #ccc;
    padding: 20px;
}

#content-box{
    border: 1px solid #ccc;
    padding: 20px;
}

#editing-form label {
    width: 150px;
    display: inline-block;
    float: left;
}
#editing-form input {
    margin-bottom: 10px;
    line-height: 32px;
    float: left;
}
#editing-form textarea {
    width: 500px;
    height: 200px;
}
#editing-form input[type=submit] {
    float: right;
  
 
 
    border: 0;
    cursor: pointer;
}
#cke_product-content{
    float: left;
    width: 700px;
}
.right-wrap-field{
    float: left;
    width: 75%
}
.right-wrap-field img{
    width: 200px;
    border: 1px solid #ccc;
    padding: 5px;
    height: 150px;
}
.right-wrap-field input{
    float: none;
}
.right-wrap-field ul{
    padding: 0;
    margin: 0;
}
.right-wrap-field ul li{
    list-style: none;
    float: left;
    position: relative;
    padding: 0;
    margin: 0;
}
.right-wrap-field ul li a{
    position: absolute;
    background: rgba(0,0,0,0.1);
    color: #000;
    padding: 5px;
    bottom: 3px;
    right: 0;
}

.box-content{
    margin: 0 auto;
    width: 800px;
    border: 1px solid #ccc;
    text-align: center;
    padding: 20px;
}
.listing-search{
    margin-bottom: 15px;
}


.total-items{
    margin-bottom: 5px;
    text-align: right;
}
.total-items strong{
    color: red;
}
#menu-list .listing-prop{
    line-height: 40px;
}
select[name="parent_id"]{
    margin-bottom: 10px;
    height: 40px;
}


/*Lesson 23*/
.listing-address{
    float: left;
    width: 180px;
}
.listing-phone{
    float: left;
    width: 151px;
}
.listing-id{
    float: left;
    width: 50px;
    text-align: center;
}
#order-detail-wrapper{
    width: 450px;
    margin: 50px auto;
    border: 4px solid #000;
    padding: 5px;
}
#order-detail{
    border: 1px solid #000;
    padding: 20px;
    line-height: 20px;
}
#order-detail ul{
    margin: 0;
    padding: 0;
}
#order-detail ul li{
    list-style: none;
}
#order-detail label{
    font-weight: bold;
}
#member-listing .listing-time{
    width: 100px;
    font-size: 12px;
}
.privilege-group{
    margin-bottom: 15px;
}
.group-name{
    margin: 0;
    padding-bottom: 5px;
}
.privilege-group ul{
    margin: 0;
    padding: 0;
}
.privilege-group ul li{
    float: left;
    width: 20%;
    list-style: none;
}
#editing-form .privilege-group ul li input{
    float: none;
}
#editing-form .privilege-group ul li label{
    float: none;
    width: auto;
}
</style>
<?php
    include('security.php');
    include('connect.php');
    if(!isset($login)){exit();}


if (isset($login)) {
    ?>
    <div class="table" >
        <h1>Phân quyền thành viên</h1>
        <div id="content-box">
            <?php
      
            if (!empty($_GET['action']) && $_GET['action'] == "save"
            ) {
                
                
                   
                $data = $_POST;

                $insertString = "";
                $deleteOldPrivileges = mysqli_query($connect, "DELETE FROM `user_privilege` WHERE `user_id` = ".$data['user_id']);
                foreach ($data['privileges'] as $insertPrivilege) {
                    $insertString .= !empty($insertString) ? "," : "";
                    $insertString .= "(NULL, " . $data['user_id'] . ", " . $insertPrivilege . ", '1595430953', '1595430953')";
                }
                $insertPrivilege = mysqli_query($connect, "INSERT INTO `user_privilege` (`id`, `user_id`, `privilege_id`, `created_time`, `last_updated`) VALUES " . $insertString);
                if(!$insertPrivilege){
                    $error = "Phân quyền không thành công. Xin thử lại";
                }
                ?>
                <?php if(!empty($error)){ ?>
                    echo $error;
                <?php } else { 
                    echo "<script>alert('Đã lưu thao tác thành công');
                    location.href='?menu=quan_ly_admin';</script>;"?>
                    
                <?php } ?>
            <?php } else { ?>
                <?php
                $privileges = mysqli_query($connect, "SELECT * FROM `privilege`");
                $privileges = mysqli_fetch_all($privileges, MYSQLI_ASSOC);
                
                $privilegeGroup = mysqli_query($connect, "SELECT * FROM `privilege_group` ORDER BY `privilege_group`.`position` ASC");
                $privilegeGroup = mysqli_fetch_all($privilegeGroup, MYSQLI_ASSOC);
                
                $currentPrivileges = mysqli_query($connect, "SELECT * FROM `user_privilege` WHERE `user_id` = ".$_GET['id']);
                $currentPrivileges = mysqli_fetch_all($currentPrivileges, MYSQLI_ASSOC);
                $currentPrivilegeList = array();
                if(!empty($currentPrivileges)){
                    foreach($currentPrivileges as $currentPrivilege){
                        $currentPrivilegeList[] = $currentPrivilege['privilege_id'];
                    }
                }
                ?>
                <form id="editing-form" method="POST" action="?menu=phan_quyen&action=save" enctype="multipart/form-data">
               <?php if (checkPrivilege('index.php?menu=phan_quyen&action=save')) { ?>
                    <input class="btn btn-success" type="submit" title="Lưu thành viên" value="Lưu Thao Tác" />
                   <?php } ?>
                    <input type="hidden" name="user_id" value="<?= $_GET['id'] ?>" />
                    <div class="clear-both"></div>
                    <?php foreach ($privilegeGroup as $group) { ?>
                        <div class="privilege-group">
                            <h3 class="group-name"><?= $group['name'] ?></h3>
                            <ul>
                                <?php foreach ($privileges as $privilege) { ?>
                                    <?php if ($privilege['group_id'] == $group['id']) { ?>
                                        <li>
                                            <input type="checkbox"
                                                <?php if(in_array($privilege['id'], $currentPrivilegeList)){ ?> 
                                                checked=""    
                                                <?php } ?>
                                                value="<?= $privilege['id'] ?>" id="privilege_<?= $privilege['id'] ?>" name="privileges[]" />
                                            <label for="privilege_<?= $privilege['id'] ?>"><?= $privilege['name'] ?></label>
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                                <div class="clear-both"></div>
                            </ul>
                        </div>
                    <?php } ?>
                </form>
            <?php } ?>
        </div>
    </div>

    <?php
}

?>