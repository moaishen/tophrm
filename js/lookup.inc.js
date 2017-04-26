/**
 * Created by chinnsyoukich on 2017/4/26.
 */
$('#table').bootstrapTable({
    pagination:true,
    //sidePagination:'client',
    //pageNumber:1,
    //pageSize:10,
    //pageList:[10,25,50,100],
    showHeader:true,
    showColumns:true,
    showRefresh:true,
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



    columns:[{
        field: 'state',
        checkbox: true,
        //rowspan: 2,
        align: 'center'
        //valign: 'middle'
    },{
        field:'name',
        title:'姓名'
    },{
        field:'sex',
        title:'性别'
    },{
        field:'birthday',
        title:'出生日期'
    }],
    data:[{
        name:'杨佩璋',
        sex:'男',
        birthday:'1990-11-17'
    },{
        name:'陈小卉',
        sex:'女',
        birthday:'1995-05-28'
    },{
        name:'杨佩璋',
        sex:'男',
        birthday:'1990-11-17'
    },{
        name:'陈小卉',
        sex:'女',
        birthday:'1995-05-28'
    },{
        name:'杨佩璋',
        sex:'男',
        birthday:'1990-11-17'
    },{
        name:'陈小卉',
        sex:'女',
        birthday:'1995-05-28'
    },{
        name:'杨佩璋',
        sex:'男',
        birthday:'1990-11-17'
    },{
        name:'陈小卉',
        sex:'女',
        birthday:'1995-05-28'
    },{
        name:'杨佩璋',
        sex:'男',
        birthday:'1990-11-17'
    },{
        name:'陈小卉',
        sex:'女',
        birthday:'1995-05-28'
    },{
        name:'杨佩璋',
        sex:'男',
        birthday:'1990-11-17'
    },{
        name:'陈小卉',
        sex:'女',
        birthday:'1995-05-28'
    }]
})