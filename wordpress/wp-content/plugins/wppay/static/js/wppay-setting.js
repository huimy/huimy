jQuery(document).ready(function($){
	$('.wppay-color-picker').wpColorPicker();

	$('#mbt-plugin-active').click(function() {
		var that = $(this);
		var username = $('#mbt_wppay_username').val(),
		token = $('#mbt_wppay_token').val();
		if ($.trim(username) == '') {
			alert('请输入模板兔用户名');
			return
		}
		if ($.trim(token) == '') {
			alert('请输入激活码');
			return
		}
		that.attr("disabled", "disabled").val('激活中...');
		$.ajax({
			url: _MBT.uri + "/include/wppay.active.php",
			data: {
				plugin: _MBT.plugin,
				home: _MBT.home,
				username: username,
				token: token,
				action: 'active'
			},
			dataType: "json",
			type: "POST",
			success: function(t) {
				that.removeAttr("disabled").val('激活插件');
				if (1 == t.status) {
					alert(t.message);
					window.location.reload()
				} else {
					alert(t.message);
					window.location.reload()
				}
			},
			error: function(XMLHttpRequest, textStatus, errorThrown) {
				that.removeAttr("disabled").val('激活插件');
				alert('激活异常！');
				window.location.reload()
			}
		})
	});

});