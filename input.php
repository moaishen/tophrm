<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>录入信息</title>
  <?php
  require "includes/link.inc.php";
  ?>
</head>
<body data-spy="scroll" data-target="#myScrollspy">
<?php
require "includes/header.inc.php";
?>

<div class="container">
    <div class="jumbotron">
        <hgroup>
            <h2>员工基本信息</h2>
            <p>请录入你的基本信息</p>
        </hgroup>

    </div>
    <div class="row">

        <!--附加导航栏，感应滚动-->
        <div class="col-xs-3" id="myScrollspy">
            <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="125px">
                <li><a href="#part-1">自然人信息</a></li>
                <li><a href="#part-2">联系方式</a></li>
                <li><a href="#part-3">教育信息</a></li>
                <li><a href="#part-4">工作信息</a></li>
                <li><a href="#part-5">合同信息</a></li>

            </ul>
        </div>

        <!--录入表单-->
        <div class="col-xs-9">
            <form class="form-horizontal" id="form" method="POST" action="php/demo.php">
                <h4 class="well" id="part-1">自然人信息</h4>
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">姓名：</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" value="" name="name" placeholder="请输入你的名字" maxlength="20" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="sex" class="col-sm-2 control-label">性别：</label>
                    <div class="col-sm-10">
                        <input type="radio" name="sex" value="man" checked="checked"> 男
                        <input type="radio" name="sex" value="women"> 女
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthday" class="col-sm-2 control-label">出生日期：</label>
                    <div class="col-sm-10">
                        <!--<input type="text" class="form-control" id="txtDtbegin" placeholder="例：2012-10-12">-->
                        <div class="input-group date form_date ">
                            <input class="form-control" type="text" value="" placeholder="例：2012-10-12" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthday" class="col-sm-2 control-label">籍贯：</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="例：上海市">
                    </div>
                    <label for="birthday" class="col-sm-2 control-label">婚姻状况：</label>
                    <div class="col-sm-4">
                        <select class="selectpicker form-control">
                            <option selected="selected" value="单身">单身</option>
                            <option value="已婚">已婚</option>
                            <option value="离异">离异</option>
                            <option value="丧偶">丧偶</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthday" class="col-sm-2 control-label">身份证号码：</label>
                    <div class="col-sm-10">
                        <input type="text" id="number" name="number" class="form-control" placeholder="请输入中国大陆18位身份证号" maxlength="18" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthday" class="col-sm-2 control-label">现居住地址：</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                    </div>
                </div>





                <h4 class="well" id="part-2">联系方式</h4>
                <div class="form-group">
                    <label for="telphone" class="col-sm-2 control-label">手机号码：</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="请输入中国大陆11位手机号" maxlength="11" required>
                    </div>
                    <label for="telphone" class="col-sm-2 control-label">微信号：</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="telphone" class="col-sm-2 control-label">电子邮箱：</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control">
                    </div>
                </div>






                <h4 class="well" id="part-3">教育信息</h4>
                <div class="form-group">
                    <label for="telphone" class="col-sm-2 control-label">学历：</label>
                    <div class="col-sm-4">
                        <select class="selectpicker form-control">
                            <option value="">小学</option>
                            <option value="">初中</option>
                            <option value="">中专</option>
                            <option value="">高中</option>
                            <option value="">大学专科</option>
                            <option selected="selected" value="">大学本科</option>
                            <option value="">研究生</option>
                            <option value="">硕士</option>
                            <option value="">博士</option>
                            <option value="">在读</option>

                        </select>
                    </div>
                    <label for="telphone" class="col-sm-2 control-label">专业：</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" maxlength="50" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="telphone" class="col-sm-2 control-label">毕业大学：</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" maxlength="50" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="telphone" class="col-sm-2 control-label">毕业研究生院校：</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="研究生毕业选填" maxlength="50">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">技能/职称证书：</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="例：CPA">
                    </div>
                </div>




                <h4 class="well" id="part-4">工作信息</h4>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">员工编号：</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">工作地点:</label>
                    <div class="col-sm-4">
                        <select name="" id="" class="selectpicker form-control">
                            <option selected="selected" value="">上海</option>
                            <option value="">北京</option>
                            <option value="">沈阳</option>
                            <option value="">成都</option>
                            <option value="">济南</option>
                            <option value="">南京</option>
                            <option value="">浙江</option>
                            <option value="">厦门</option>
                            <option value="">广州</option>
                            <option value="">郑州</option>
                            <option value="">无锡</option>
                            <option value="">其他/无固定工作地</option>

                        </select>
                    </div>
                    <label for="" class="col-sm-2 control-label">所属公司：</label>
                    <div class="col-sm-4">
                        <select name="" id="" class="selectpicker  form-control">
                            <option value="" selected="selected">上海总部</option>
                            <option value="">北京办事处</option>
                            <option value="">沈阳厂/沈阳分公司</option>
                            <option value="">成都分公司</option>
                            <option value="">济南分公司</option>
                            <option value="">南京分公司</option>
                            <option value="">新无锡厂</option>
                            <option value="">厦门分公司</option>
                            <option value="">广州办事处</option>
                            <option value="">郑州分公司</option>
                            <option value="">销售总公司</option>
                            <option value="">其他</option>

                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">所属部门：</label>
                    <div class="col-sm-10">
                        <div class="col-sm-4">
                            <select name="" id="SelProvince" class="selectpicker form-control">
                                <option value="">一级部门</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <select name="" id="SelCity" class="selectpicker form-control">
                                <option value="">二级部门</option>

                            </select>
                        </div>
                        <div class="col-sm-4">
                            <select name="" id="SelArea" class="selectpicker form-control">
                                <option value="">三级部门</option>

                            </select>
                        </div>

                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">入职日期：</label>
                    <div class="col-sm-10">
                        <!--<input type="text" class="form-control" id="startdate" placeholder="例：2012-10-12">-->
                        <div class="input-group date form_date ">
                            <input class="form-control" type="text" value="" placeholder="例：2012-10-12" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>

                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">职等：</label>
                    <div class="col-sm-4">
                        <select name="" id="" class="selectpicker form-control">
                            <option value="" selected="selected">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                            <option value="">6</option>
                            <option value="">7</option>
                            <option value="">8-1</option>
                            <option value="">8-2</option>
                            <option value="">9-1</option>
                            <option value="">9-2</option>
                            <option value="">10-1</option>
                            <option value="">10-2</option>
                            <option value="">11</option>
                            <option value="">12</option>
                            <option value="">13</option>
                            <option value="">14</option>
                            <option value="">15</option>


                        </select>
                    </div>

                    <label for="" class="col-sm-2 control-label">职称：</label>
                    <div class="col-sm-4">
                        <select name="" id="" class="selectpicker form-control">
                            <optgroup label="幕僚岗位">
                                <option value="" >助理</option>
                                <option value="">员</option>
                                <option value="">专员</option>
                                <option value="">副组长</option>
                                <option value="">组长</option>
                                <option value="">副主任</option>
                                <option value="">主任</option>
                                <option value="">资深主任</option>
                                <option value="">储备经理</option>
                                <option value="">经理</option>
                                <option value="">资深经理</option>
                                <option value="">储备总监</option>
                                <option value="">总监</option>
                                <option value="">资深总监</option>
                                <option value="">执行副总</option>
                                <option value="">资深执行副总</option>
                                <option value="">执行总经理</option>
                                <option value="">事业总经理</option>
                            </optgroup>
                            <optgroup label="业务岗位">
                                <option value="" >销售助理</option>
                                <option value="">销售代表</option>
                                <option value="">资深销售代表</option>
                                <option value="">副组长</option>
                                <option value="">组长</option>
                                <option value="">储备城市经理</option>
                                <option value="">城市经理</option>
                                <option value="">资深城市经理</option>
                                <option value="">储备区域经理</option>
                                <option value="">区域经理</option>
                                <option value="">资深区域经理</option>
                                <option value="">储备总监</option>
                                <option value="">总监</option>
                                <option value="">大区总监</option>
                                <option value="">执行副总</option>
                                <option value="">资深执行副总</option>
                                <option value="">执行总经理</option>
                                <option value="">事业总经理</option>
                            </optgroup>


                        </select>

                    </div>
                    <p class=" help-block pull-right">如果不清楚职等与职称的对应关系，请参照<a data-toggle="modal" data-target="#myModal">《岗位职称表》</a>。</p>
                </div>

                <!--模态框-->
                <div class="modal fade" id="myModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <!--<button type="button" class="close" data-disimiss="modal" aria-hidden="true">&times;</button>-->
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    &times;
                                </button>
                                <h4 class="modal-title">《岗位职称表》</h4>
                            </div>
                            <div class="modal-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>层级</th>
                                        <th>职等</th>
                                        <th>幕僚岗位职称</th>
                                        <th>业务岗位职称</th>
                                    </tr>


                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td rowspan="3" style="vertical-align:middle">非管理职</td>
                                        <td>1</td>
                                        <td>助理</td>
                                        <td>销售助理</td>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>员</td>
                                        <td>销售代表</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>专员</td>
                                        <td>资深销售代表</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" style="vertical-align:middle">基层管理职</td>
                                        <td>4</td>
                                        <td>副组长</td>
                                        <td>副组长</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>组长</td>
                                        <td>组长</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="8" style="vertical-align: middle">中阶管理职</td>
                                        <td>6</td>
                                        <td>副主任</td>
                                        <td>储备城市经理</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>主任</td>
                                        <td>城市经理</td>
                                    </tr>
                                    <tr>
                                        <td>8-1</td>
                                        <td>资深主任</td>
                                        <td>资深城市经理</td>
                                    </tr>
                                    <tr>
                                        <td>8-2</td>
                                        <td>储备经理</td>
                                        <td>储备区域经理</td>
                                    </tr>
                                    <tr>
                                        <td>9-1</td>
                                        <td>经理</td>
                                        <td>区域经理</td>
                                    </tr>
                                    <tr>
                                        <td>9-2</td>
                                        <td>资深经理</td>
                                        <td>资深区域经理</td>
                                    </tr>
                                    <tr>
                                        <td>10-1</td>
                                        <td>储备总监</td>
                                        <td>储备总监</td>
                                    </tr>
                                    <tr>
                                        <td>10-2</td>
                                        <td>总监</td>
                                        <td>总监</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="5" style="vertical-align: middle">高阶管理职</td>
                                        <td>11</td>
                                        <td>资深总监</td>
                                        <td>大区总监</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>执行副总</td>
                                        <td>执行副总</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>资深执行副总</td>
                                        <td>资深执行副总</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>执行总经理</td>
                                        <td>执行总经理</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>事业总经理</td>
                                        <td>事业总经理</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">职务：</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="4"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="state" class="col-sm-2 control-label">在职状况：</label>
                    <div class="col-sm-10">
                        <input type="radio" name="state" value=""> 实习
                        <input type="radio" name="state" value="" checked="checked"> 试用
                        <input type="radio" name="state" value=""> 转正
                        <input type="radio" name="state" value=""> 离职

                    </div>
                </div>




                <h4 class="well" id="part-5">合同信息</h4>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">合同类型：</label>
                    <div class="col-sm-4">
                        <select name="" id="" class="selectpicker form-control">
                            <option value="" selected="selected">正式合同</option>
                            <option value="">派遣合同</option>

                        </select>
                    </div>
                    <label for="" class="col-sm-2 control-label">签约公司：</label>
                    <div class="col-sm-4">
                        <select name="" id="" class="selectpicker form-control">
                            <optgroup label="脱普集团">
                                <option value="" selected="selected">沈阳脱普上海分公司</option>

                            </optgroup>
                            <optgroup label="派遣公司">
                                <option value="" >前程无忧</option>
                                <option value="">智联易才</option>
                                <option value="">无锡金桥</option>

                            </optgroup>

                        </select>
                    </div>

                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">合同开始日：</label>
                    <div class="col-sm-4">
                        <div class="input-group date form_date ">
                            <input class="form-control" type="text" value="" placeholder="例：2012-10-12" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>

                    </div>
                    <label for="" class="col-sm-2 control-label">合同结束日：</label>
                    <div class="col-sm-4">
                        <div class="input-group date form_date ">
                            <input class="form-control" type="text" value="" placeholder="例：2012-10-12" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>

                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">开户银行：</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="例：招商银行陆家嘴支行">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">银行卡号：</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">公积金账号：</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">备注：</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="4"></textarea>
                    </div>
                </div>

                <div class="form-group col-sm-offset-8 pull-right">

                    <input type="submit" class="btn btn-info  " value="提交">
                    <input type="button" class="submit btn btn-danger " value="取消">
                </div>
            </form>
        </div>

    </div>
</div>



<?php
require "includes/footer.inc.php";
?>

<script src="js/input.inc.js"></script>


</body>
</html>