sprint_editor.registerBlock("my_gallery", function ($, $el, data) {
	data = $.extend(
		{
			images: [],
			perRow: 2,
			aspectRatio: '3-to-2'
		},
		data
	)

	var itemsCollection = {}
	var globalUid = false

	$.each(data.images, function (index, item) {
		var uid = sprint_editor.makeUid()
		itemsCollection[uid] = item
	})

	this.getData = function () {
		return data
	}

	this.collectData = function () {
		data.images = []

		$el.find(".sp-item").each(function () {
			var uid = $(this).data("uid")
			if (uid && itemsCollection[uid]) {
				data.images.push(itemsCollection[uid])
			}
		})

		data.perRow = $el.find('[name="per-row"]').val()
		data.aspectRatio = $el.find('[name="aspect-ratio"]').val()

		return data
	}

	this.afterRender = function () {
		$.each(itemsCollection, function (uid, item) {
			renderitem(uid)
		})

		var $btn = $el.find(".sp-x-btn-file")
		var $btninput = $btn.find("input[type=file]")
		var $label = $btn.find("label")
		var labeltext = $label.text()

		$el.find(".sp-item-desc").bindWithDelay("input", function () {
			if (globalUid && itemsCollection[globalUid]) {
				itemsCollection[globalUid].desc = $(this).val()
			}
		})

		$btninput
			.fileupload({
				dropZone: $el,
				url: sprint_editor.getBlockWebPath("gallery") + "/upload.php",
				dataType: "json",
				done: function (e, result) {
					$.each(result.result.file, function (index, file) {
						var uid = sprint_editor.makeUid()
						itemsCollection[uid] = {
							file: file,
							desc: "",
						}
						renderitem(uid)
					})
				},
				progressall: function (e, result) {
					var progress = parseInt((result.loaded / result.total) * 100, 10)
					$label.text("Загрузка: " + progress + "%")
					if (progress >= 100) {
						$label.text(labeltext)
					}
				},
			})
			.prop("disabled", !$.support.fileInput)
			.parent()
			.addClass($.support.fileInput ? undefined : "disabled")

		$el.on("click", ".sp-gallery-toggle", function (e) {
			togglepanel()
		})

		$el.on("click", ".sp-item-del", function () {
			$el.find(".sp-x-active").remove()
			closeedit()
		})

		$el.on("click", ".sp-item", function (e) {
			e.stopPropagation()
			if ($(this).hasClass("sp-x-active")) {
				$(this).removeClass("sp-x-active")
				closeedit()
			} else {
				$el.find(".sp-item").removeClass("sp-x-active")
				$(this).addClass("sp-x-active")
				openedit($(this).data("uid"))
			}
		})

		$el.find(".sp-download-url").bindWithDelay(
			"input",
			function () {
				var $urltext = $(this)

				var urlvalue = $.trim($urltext.val())

				if (urlvalue.length <= 0) {
					return false
				}

				$.ajax({
					url: sprint_editor.getBlockWebPath("gallery") + "/download.php",
					type: "post",
					data: {
						url: urlvalue,
					},
					dataType: "json",
					success: function (result) {
						if (result.image) {
							var uid = sprint_editor.makeUid()

							itemsCollection[uid] = {
								file: result.image,
								desc: "",
							}
							renderitem(uid)
						}

						$urltext.val("")
					},
				})
			},
			500
		)

		var removeIntent = false
		$el.find(".sp-result").sortable({
			items: ".sp-item",
			placeholder: "sp-placeholder",
			over: function () {
				removeIntent = false
			},
			out: function () {
				removeIntent = true
			},
			beforeStop: function (event, ui) {
				if (removeIntent) {
					ui.item.remove()
					closeedit()
				} else {
					ui.item.removeAttr("style")
				}
			},
		})

		if (!data.images || !data.images.length) {
			togglepanel()
		}

		$el.find('[name="per-row"]').val(data.perRow)
		$el.find('[name="aspect-ratio"]').val(data.aspectRatio)
	}
	var togglepanel = function () {
		if ($el.hasClass("sp-show")) {
			$el.find(".sp-source").hide(250)
			$el.removeClass("sp-show")
		} else {
			$el.find(".sp-source").show(250)
			$el.addClass("sp-show")
		}
	}
	var renderitem = function (uid) {
		if (!itemsCollection[uid]) {
			return
		}

		var item = itemsCollection[uid]
		var $item = $el.find('[data-uid="' + uid + '"]')

		if ($item.length > 0) {
			$item.replaceWith(
				sprint_editor.renderTemplate("gallery-images", {
					item: item,
					uid: uid,
					active: 1,
				})
			)
		} else {
			$el.find(".sp-result").append(
				sprint_editor.renderTemplate("gallery-images", {
					item: item,
					uid: uid,
					active: 0,
				})
			)
		}
	}

	var closeedit = function () {
		globalUid = false
		$el.find(".sp-edit").hide(250)
		$el.find(".sp-item-desc").val("")
	}

	var openedit = function (uid) {
		if (itemsCollection[uid]) {
			globalUid = uid
			$el.find(".sp-item-desc").val(itemsCollection[uid].desc)
			$el.find(".sp-edit").show(250)
		}
	}
})
