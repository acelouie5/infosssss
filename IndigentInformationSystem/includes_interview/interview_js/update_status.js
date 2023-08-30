function updateinfo() {
   const name = $('#inName').val();
   const dt = $('#interviewDate').val();
   const stats = $('#interview_Status').val();
   const id = $('#ids').val();
 alert(stats);
   $.post('../includes_interview/update_status.php', {
     name: name,
     dt: dt,
     stats: stats,
     id: id

   }, function(data, status) {
     alert(data);
   });
 }
 