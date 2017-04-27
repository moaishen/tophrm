<?php
/**
 * Created by PhpStorm.
 * User: chinnsyoukich
 * Date: 2017/4/27
 * Time: 10:16
 */

//连接数据库
define("db_host","localhost");
define("db_user","root");
define("db_password","123456");
define("db_database","tophrm");

$conn = mysqli_connect(db_host,db_user,db_password,db_database) or die("数据库连接失败");

//重要！！设置字符编码！
$conn->query('SET NAMES UTF8') or die('字符编码错误！');

$sql = "SELECT * FROM tbl_employee";
$result = $conn->query($sql);


?>

<script>

    //表格初始化
    $('#table').bootstrapTable({
        pagination:true,
//        url:'database/json',
//        dataType:'json',
        //sidePagination:'client',
        //pageNumber:1,
        //pageSize:10,
        //pageList:[10,25,50,100],
        showHeader:true,
        showColumns:true,
//        showRefresh:true,
        showPaginationSwitch:true,
        showToggle:true,
//clickToSelect:true,
//      height:527,
        striped:true,
        toolbar:'#toolbar',
        //visible:true,
        //checkbox:true,
        //checkbocEnabled:true,
        //detailView:true,
        clickToSelect: true,//点击行即可选中单选/复选框
        search:true,
        showExport:true,
        exportDataType:'selected',
//        exportTypes:['txt','excel','pdf']



        columns:[{
            field: 'state',
            checkbox: true,
            //rowspan: 2,
            align: 'center'
            //valign: 'middle'
        },{
            field:'name',
            title:'姓名',
            sortable:true
        },{
            field:'sex',
            title:'性别',
            sortable:true
        },{
            field:'birthday',
            title:'出生日期',
            sortable:true
        }],
        data:[
        <?php
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    global $data;
                    $data = '{';
                    $data .= "name:'{$row["employee_name"]}',";
                    $data .= "\n";
                    $data .= "sex:'{$row["sex"]}',";
                    $data .= "\n";
                    $data .= "birthday:'{$row["birthday"]}'";
                    $data .= '},';
                    $data .= "\n";
                    echo $data;
                }
            }

            ?>
        ]
    });
</script>

<?php

$conn->close();

?>


<script>
    function add(){
        window.location.href = "input.php";
    }
</script>

