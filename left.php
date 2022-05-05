<div class="row">
    <div class="panel-group" id="accordion">
     <?php 
		include('connect.php');
		$sl= "select * from menu_doc";
		$exec= mysqli_query($connect,$sl);
		$i=0;
		while($row= mysqli_fetch_array($exec)){		
	?>
        <div class="panel panel-success" style="margin-left: -16px;">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" style="text-decoration: none;" data-parent="#accordion" href="#collapse<?php echo $num; ?>"><?php echo $row['title'];  ?></a>
                </h4>
            </div>
            <div id="collapse<?php echo $num; ?>" class="panel-collapse">
                <div class="panel-body">
                    <table class="table">
                        <?php 
                            if($row['sub_1']!=""){echo "    
                                <tr>
                                    <td>
                                        <a href=".$row['sub_1_link'].">".$row['sub_1']."</a>
                                    </td>
                                </tr>";}
                            if($row['sub_2']!=""){echo "    
                                <tr>
                                    <td>
                                        <a href=".$row['sub_2_link'].">".$row['sub_2']."</a>
                                    </td>
                                </tr>";}
                            if($row['sub_3']!=""){echo "    
                                <tr>
                                    <td>
                                        <a href=".$row['sub_3_link'].">".$row['sub_3']."</a>
                                    </td>
                                </tr>";}
                            if($row['sub_4']!=""){echo "    
                                <tr>
                                    <td>
                                        <a href=".$row['sub_4_link'].">".$row['sub_4']."</a>
                                    </td>
                                </tr>";}
                            if($row['sub_5']!=""){echo "    
                                <tr>
                                    <td>
                                        <a href=".$row['sub_5_link'].">".$row['sub_5']."</a>
                                    </td>
                                </tr>";}
                            if($row['sub_6']!=""){echo "    
                                <tr>
                                    <td>
                                        <a href=".$row['sub_6_link'].">".$row['sub_6']."</a>
                                    </td>
                                </tr>";}
                            if($row['sub_7']!=""){echo "    
                                <tr>
                                    <td>
                                        <a href=".$row['sub_7_link'].">".$row['sub_7']."</a>
                                    </td>
                                </tr>";}
                        ?>
                    </table>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
</div>
<!------------------------------------LỌC ------------------------->

<div class="section" id="filter-product-wp">
        <div class="section-head">
          <div class="panel-heading">
             <h4 class="panel-title">
               TÌM KIẾM NÂNG CAO
             </h4>
          </div>
        </div>
        <!-- <div class="input-group_loc">
          <input type="hidden" name="menu" value="search_form" >
          <input type="text" class="form-control" style="border-radius: 4px; padding: 20px;margin-top:5px;" name="search" placeholder="Tên sản phẩm" id="txtSearch_form"/>
        </div> -->
        <div class="section-detail">
          <form method="POST" action="?menu=loc">  
          <table>
                    <thead>
                        <tr>
                            <td colspan="2">Giá</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="radio" name="r-price" id="r-price1" value="1000000,2000000"></td>
                            <td><label for="r-price1">1.000.000đ - 2.000.000đ</label></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="r-price" id="r-price2" value="2000000,4000000"></td>
                            <td><label for="r-price2">2.000.000đ - 4.000.000đ</label></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="r-price" id="3" value="4000000,6000000"></td>
                            <td><label for="3">4.000.000đ - 6.000.000đ</label></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="r-price" id="4" value="6000000,10000000"></td>
                            <td><label for="4">6.000.000đ - 10.000.000đ</label></td>
                        </tr>
                        
                    </tbody>
                </table>
                <!-- <table>
                    <thead>
                        <tr>
                            <td colspan="2" id="yeu_cau_loc">Thương Hiệu</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="radio" name="thuong_hieu" id="i1" value="1"></td>
                            <td><label for="i1">Casio</label></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="thuong_hieu" id="i2" value="2"></td>
                            <td><label for="i2">Citizen</label></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="thuong_hieu" id="i3" value="3"></td>
                            <td><label for="i3">Doxa</label></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="thuong_hieu" id="i4" value="4"></td>
                            <td><label for="i4">Longines</label></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="thuong_hieu" id="i5" value="5"></td>
                            <td><label for="i5">Movado</label></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="thuong_hieu" id="i6" value="6"></td>
                            <td><label for="i6">Frederique Constant</label></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="thuong_hieu" id="i7" value="7"></td>
                            <td><label for="i7">Tissot</label></td>
                        </tr>
                    </tbody>
                </table> -->
                <table>
                    <thead>
                        <tr>
                            <td colspan="2">Hãng</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="radio" name="r-brand" id="i1" value="1"></td>
                            <td><label for="i1">Casio</label></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="r-brand" id="i2" value="2"></td>
                            <td><label for="i2">Citizen</label></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="r-brand" id="i3" value="3"></td>
                            <td><label for="i3">Doxa</label></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="r-brand" id="i4" value="4"></td>
                            <td><label for="i4">Longines</label></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="r-brand" id="i5" value="5"></td>
                            <td><label for="i5">Movado</label></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="r-brand" id="i6" value="6"></td>
                            <td><label for="i6">Frederique Constant</label></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="r-brand" id="i7" value="7"></td>
                            <td><label for="i7">Tissot</label></td>
                        </tr>
                    </tbody>
                </table>
               
                <input style="width: 100%;color: white; background-color:#337ab7;border-radius: 5px; border: none; " type="submit" name="btn_filter" value="Áp dụng">
            </form>
        </div>
    </div>

