<form>
	Pilih propinsi : 
	<select name="propinsi" onChange="tampil(this.value)">
		<option value=""></option>
		<option value="Jakarta">Jakarta</option>
		<option value="Tangerang">Tangerang</option>
	</select>
</form>
<div id="kota"></div>

<script type="text/javascript">
	
	function tampil(propinsi){
		var kota = "";

		switch(propinsi){
			case "Jakarta" : {
				kota = "<ul> "+ 
								"<li>Jakarta Selatan</li>" +
								"<li>Jakarta Barat</li>" +
						"</ul>";
			}
			break;
			case "Tangerang" : {
				kota = "<ul> "+ 
								"<li>Tangerang Selatan</li>" +
								"<li>Tangerang Kota</li>" +
						"</ul>";
			}
			break;

			default :
			kota = "tidak ada kota";

		}

		var idkota = document.getElementById('kota');
		idkota.innerHTML = kota;

	}
</script>