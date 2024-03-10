<!DOCTYPE html>
<html>
<head>
	<!-- Load Bootstrap -->
	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
		integrity=
"sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
		crossorigin="anonymous" >
	<script src=
"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity=
"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
		crossorigin="anonymous">
	</script>
	<script src=
"https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
		integrity=
"sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
		crossorigin="anonymous">
	</script>

  <style>body{
    background: #fff;
  }
  .box {
    transition: box-shadow .3s;
    width: 300px;
    height: 500px;
    margin: 50px;
    border-radius:10px;
    border: 1px solid #ccc;
    background: #fff;
    float: left;
    
  }
  .box:hover {
    box-shadow: 0 0 100px rgba(33,33,33,.2); 
  }</style>
</head>
<body >
	<div class="container mt-3" style="width: 700px;">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Leave comment</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Driver review</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Driver name:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Feedback:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">submit</button>
      </div>
    </div>
  </div>
</div>
	</div>

	<script>
		// Enable tooltips
		var tooltipTriggerList =
			[].slice.call(
				document.querySelectorAll('[data-toggle="tooltip"]'));
		var tooltipList =
			tooltipTriggerList.map(function (tooltipTriggerEl) {
				return new bootstrap.Tooltip(tooltipTriggerEl);
			});
	</script>
</body>
</html>
