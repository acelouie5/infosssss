function updateinfos() {
    const vname = $('#vName').val();
    const dts = $('#Date').val();
    const statss = $('#Status').val();
    const ids = $('#idss').val();
  
    $.post('../includes_verifier/vstatus.php', {
      vname: vname,
      dts: dts,
      statss: statss,
      ids: ids
    }, function(data, status) {
      alert(data);
    });
  }
  