<html lang="id">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
	<link rel="stylesheet"href="assets/css/jquery-ui.css" />
	<script src="assets/js/jquery-ui.js"></script>
	<link  rel="stylesheet"  href="assets/css/cropper.min.css"/>
	<script type="text/javascript" src="assets/js/cropper.min.js"></script>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/prism.min.css"/>
	<link rel="stylesheet" href="assets/css/all.css">
	<link rel="stylesheet" href="assets/css/custom.css">
	<title>Croping Image</title>
</head>

<body>
	<div class="row" style="padding-left: 15px;padding-top: 15px;">
		<!-- <div class="preview"></div> -->
		<div class="col-md-3">
			<form class="form-inline">
				<input type="file" name="image" id="image" class="" onchange="readURL(this);"/>
			</form>
		</div>
		<div class="col-md-9">
			<button id="move" type="button" class="btn btn-primary btn-sm" title="Move"><i class="fas fa-arrows-alt"></i> Move</button>
			<button id="crop" type="button" class="btn btn-primary btn-sm" title="Crop"><i class="fas fa-crop-alt"></i> Crop</button>
			<button id="zoom" type="button" class="btn btn-dark btn-sm" title="Zoom In"><i class="fas fa-search-plus"></i> Zoom In</button>
			<button id="mins" type="button" class="btn btn-dark btn-sm" title="Zoom Out"><i class="fas fa-search-minus"></i> Zoom Out</button>
			<button id="ok" type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" title="Process Crop"><i class="fas fa-save"></i> Save</button>

			<span style="vertical-align: middle;"> 
				X : <input type="text" class="" id="str_x" placeholder="0" style="width: 50px"> 
				Y : <input type="text" class="" id="str_y" placeholder="0" style="width: 50px">

				W : <input type="text" class="" id="str_w" placeholder="0" style="width: 50px">
				H : <input type="text" class="" id="str_h" placeholder="0" style="width: 50px">
				
			</span>
			<button id="set_crop" type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Set Crop</button>
			
			<button style="margin-left: 5px;margin-right: 15px" id="refresh" type="button" class="btn btn-danger float-right"><i class="fas fa-sync-alt"></i></button>
			<button style="margin-left: 5px" type="button" class="btn btn-danger btn-sm float-right" data-toggle="modal" data-target="#modalForm" title="Add XML"><i class="fas fa-plus"></i> Add XML</button>
		</div>
	</div>
	<div class="row" style="padding-left: 15px;padding-right: 15px;padding-top:5px;">
		<div class="col-md-12">
			<div class="">
				<div class="card" >
					
					<div class="card-body" style="padding: 0px !important">
						<div class="image_container" style="min-height: 550px">
							<img id="blah" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<label><i class="fas fa-image"></i> Download Image</label>
				</div>
				<div class="modal-body">
					<div id="cropped_result" style="text-align: center">
					</div>
				</div>
				<div class="modal-footer">
					<!-- <button onclick="save()" type="button" class="btn btn-primary" data-dismiss="modal">Save</button> -->
					<!-- <a href="a.jpg" download="imageName"><img src="images/a.jpg" alt="Image"/></a> -->
					<a id="link_download" download class="btn btn-sm btn-primary"><i class="fas fa-download"></i> Download</a>
				</div>
			</div>

		</div>
	</div>

	<div id="modalForm" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<div id="notif" style="width: 100%">

					</div>
					
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<table border="0" width="100%">
								<tr>
									<td width="30%">Type</td>
									<td>:</td>
									<td colspan="2">
										<input type="text" id="id_type" name="" class="form-control" placeholder="Type" style="width:70%">
									</td>
								</tr>
								<tr>
									<td>Name</td>
									<td>:</td>
									<td colspan="2">
										<input type="text" id="id_name" name="id_name" class="typeahead form-control" placeholder="Name" style="width:70%">
									</td>
								</tr>
								<tr>
									<td>Description</td>
									<td>:</td>
									<td colspan="2">
										<input type="text" id="id_description" name="" class="form-control" placeholder="Description">
									</td>
								</tr>
								<tr>
									<td colspan=""></td>
									<td></td>
									<td colspan="2">
										<div class="form-check">
											<input class="form-check-input" type="radio" name="koordinat" id="x_y" value="x_y" checked>
											<label class="form-check-label" for="x_y">
												X & Y
											</label>
										</div>

										<div class="form-check">
											<input class="form-check-input" type="radio" name="koordinat" id="t_l" value="t_l">
											<label class="form-check-label" for="t_l">
												L & T
											</label>
										</div>
									</td>
								</tr>
								<tr id="div_1">
									<td>Coordinate</td>
									<td>:</td>
									<td>
										<div class="input-group mb-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 40px"><a id="x_l">X</a></div>
											</div>
											<input readonly="true" type="text" id="id_val_x" name="" class="form-control" placeholder="0">
										</div>
									</td>
									<td>
										<div class="input-group mb-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 40px"><a id="y_t">Y</a></div>
											</div>
											<input readonly="true" type="text" id="id_val_y" name="" class="form-control" placeholder="0">
										</div>
									</td>
								</tr>
								<tr id="div_2">
									<td>Size</td>
									<td>:</td>
									<td>
										<div class="input-group mb-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 40px">W</div>
											</div>
											<input readonly="true" type="text" id="id_val_w" name="" class="form-control" placeholder="0">
										</div>
									</td>
									<td>
										<div class="input-group mb-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 40px">H</div>
											</div>
											<input readonly="true" type="text" id="id_val_h" name="" class="form-control" placeholder="0">
										</div>
									</td>
								</tr>
								<tr>
									<td>Action</td>
									<td>:</td>
									<td colspan="2">
										<input type="text" id="id_action" name="" class="form-control" placeholder="Action" style="width:70%">
									</td>
								</tr>
								<tr>
									<td style="vertical-align: top">Datas</td>
									<td style="vertical-align: top">:</td>
									<td colspan="2">
										<textarea class="form-control" id="id_datas" rows="6"></textarea>
									</td>
								</tr>
								<tr>
									<td colspan="3">
										
									</td>


									<td align="right">
										<input type="hidden" id="param" value="x_y">
										<button style="margin-top: 15px" type="button" class="btn btn-primary btn-sm" onclick="add()"><i class="fas fa-plus"></i> Add</button>
									</td>
								</tr>

							</table>
						</div>
						<div class="col-md-6">
							<button style="margin-top: 0px" type="button" class="btn btn-info btn-sm" onclick="copy()"><i class="fas fa-copy"></i> Copy</button>
										<button style="margin-top: 0px" type="button" class="btn btn-danger btn-sm float-right" onclick="hapusSemua()"><i class="fa fa-trash"></i> Delete All</button>
							<div class="records_content" id="result"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" defer>
		$(function(){
			$( "#id_name" ).autocomplete({
				source: "controller/autocomplete.php",  
				minLength:1, 
			});

			$('input[type="radio"]').click(function(){
				if ($(this).is(':checked'))
				{
					if ($(this).val()=='t_l') {
						$('#x_l').text('L');
						$('#y_t').text('T');

						$('#div_2').each(function () {
							if (!$(this).text().match(/^\s*$/)) {
								$(this).insertBefore($(this).prev('#div_1'));
							}
						});
						$("#id_type").val("").prop("disabled","true");
						$("#id_name").val("").prop("disabled","true");;
						$("#id_description").val("").prop("disabled","true");;
						$("#id_action").val("").prop("disabled","true");;
						$("#id_datas").val("").prop("disabled","true");;
					}else{
						$('#x_l').text('X');
						$('#y_t').text('Y');
						$('#div_1').each(function () {
							if (!$(this).text().match(/^\s*$/)) {
								$(this).insertBefore($(this).prev('#div_2'));
							}
						});

						$("#id_type").val("").removeAttr("disabled");
						$("#id_name").val("").removeAttr("disabled");;
						$("#id_description").val("").removeAttr("disabled");;
						$("#id_action").val("").removeAttr("disabled");;
						$("#id_datas").val("").removeAttr("disabled");;
					}
					$('#param').val($(this).val());
				}
			});
		});
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#blah').attr('src', e.target.result)

				};
				reader.readAsDataURL(input.files[0]);
				setTimeout(initCropper, 500);
			}
		}
		function initCropper(){

			var image = document.getElementById('blah');
			var cropper = new Cropper(image, {
				aspectRatio:"free",
				viewMode: 1, //1,2,3
				movable: true,
				zoomable: true,
				setDragMode:'move',
				preview: '.preview',
				crop: function(e) {
					$('#id_val_x').val(Math.round(e.detail.x));
					$('#id_val_y').val(Math.round(e.detail.y));
					$('#id_val_w').val(Math.round(e.detail.width));
					$('#id_val_h').val(Math.round(e.detail.height));

					$('#str_x').val(Math.round(e.detail.x));
					$('#str_y').val(Math.round(e.detail.y));
					$('#str_w').val(Math.round(e.detail.width));
					$('#str_h').val(Math.round(e.detail.height));
					// console.log("X" +  Math.round(e.detail.x));
					// console.log("Y" + Math.round(e.detail.y));
					// console.log("Width :" + Math.round(e.detail.width));
					// console.log("height :" +  Math.round(e.detail.height));
				}
			});

			//Crop Button
			document.getElementById('ok').addEventListener('click', function(){
				$("#img_crop").remove();
				var imgurl =  cropper.getCroppedCanvas({maxWidth:4096,maxHeight:4096}).toDataURL();
				var img = document.createElement("img");
				img.id  ="img_crop";
				img.src = imgurl;
				document.getElementById("cropped_result").appendChild(img);

				cropper.getCroppedCanvas().toBlob(function (blob) {
					var formData = new FormData();
					formData.append('croppedImage', blob);
					formData.append('name', $('#id_name').val());
					$.ajax('controller/upload.php', {
						method: "POST",
						data: formData,
						processData: false,
						contentType: false,
						success: function (data) {
							$('#link_download').attr('href','/crop/uploads/'+data)
							console.log('Upload success');
						},
						error: function () {
							console.log('Upload error');
						}
					});
				});
			})


			document.getElementById('move').addEventListener('click', function(){
				cropper.setDragMode("move");
				cropper.clear();
			});
			document.getElementById('crop').addEventListener('click', function(){
				cropper.setDragMode("crop");
				cropper.crop();
			});

			document.getElementById('zoom').addEventListener('click', function(){
				cropper.zoom(0.1);
			});

			document.getElementById('mins').addEventListener('click', function(){
				cropper.zoom(-0.1);
			});

			document.getElementById('refresh').addEventListener('click', function(){
				cropper.reset();
				//location.reload();
			});

			// function setData(){
			// 	cropper.setCropBoxData({"left":$('#str_x').val(),"top":$('#str_y').val(),"width":$('#str_w').val(),"height":$('#str_h').val()});

			// }

			document.getElementById('set_crop').addEventListener('click', function(){


				cropper.setData({"x":parseInt($('#str_x').val()),"y":parseInt($('#str_y').val()),"width":parseInt($('#str_w').val()),"height":parseInt($('#str_h').val()),"rotate":0,"scaleX":1,"scaleY":1});
				// console.log("X : "+ $('#str_x').val());
				// console.log("Y : "+ $('#str_y').val());
				// console.log("W : "+ $('#str_w').val());
				// console.log("H : "+ $('#str_h').val());
				//console.log(cropper.getCropBoxData());
				//location.reload();
			});
		}

		function copy(){
			var range = document.createRange();
			range.selectNode(document.getElementById("result"));
			window.getSelection().removeAllRanges(); 
			window.getSelection().addRange(range); 
			document.execCommand("copy");
			//window.getSelection().removeAllRanges();

		}
		function save(){
			var image = new Image();
			image.crossOrigin = "anonymous";
			image.src = "http://localhost/crop/uploads/untield.png";

			var fileName = image.src.split(/(\\|\/)/g).pop();
			image.onload = function () {
				var canvas = document.createElement('canvas');
				canvas.width = this.naturalWidth; 
				canvas.height = this.naturalHeight; 
				canvas.getContext('2d').drawImage(this, 0, 0);
				var blob;
				if (image.src.indexOf(".jpg") > -1) {
					blob = canvas.toDataURL("image/jpeg");
				} else if (image.src.indexOf(".png") > -1) {
					blob = canvas.toDataURL("image/png");
				} else if (image.src.indexOf(".gif") > -1) {
					blob = canvas.toDataURL("image/gif");
				} else {
					blob = canvas.toDataURL("image/png");
				}
				$("body").html("<b>Click image to download.</b><br><a download='" + fileName + "' href='" + blob + "'><img src='" + blob + "'/></a>");
			};
		}
	</script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="ajax/script.js"></script>
	<script type="text/javascript" src="https://www.google-analytics.com/ga.js" async></script>

</body>
</html>
