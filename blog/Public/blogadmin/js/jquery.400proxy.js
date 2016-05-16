var topmenutab = [

	{key:"adminlist", value:'管理员管理',submenu:[{value:'管理员列表',url:'manager/manager_list.html'},{value:'添加管理员',url:'manager/manager_create.html'},{value:'修改密码',url:'manager/manager_edit_pwd.html'},{value:'修改个人信息',url:'manager/xiugaigeren.html'}]},

	
];

function addTab(title, url){
	if ($('#maincontent').tabs('exists', title)){
		$('#maincontent').tabs('select', title);
	} else {
		var content = '<iframe scrolling="auto" frameborder="0"  src="'+url+'" style="width:100%;height:100%;"></iframe>';
		$('#maincontent').tabs('add',{
			title:title,
			content:content,
			closable:true
		});
	}
}
function open1(url, a){
	$('#mainmenucontent').panel('refresh', url);
	$(a).parent().parent().find("li a").attr("id","");
	$(a).attr("id","topcurmenu");
}
function reloadpage(){
	location.reload();
}
$(function(){
	$("table tr:odd").css({"background":"#F6F6F6"});
})