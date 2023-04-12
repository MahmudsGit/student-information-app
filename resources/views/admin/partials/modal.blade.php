<div class="modal fade student-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Create student</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
            <div class="card border-0">
              <div class="card-body">
                  <form action="" enctype="multipart/form-data">
                      <div class="form-floating mb-3">
                          <input class="form-control" name="name" id="name" type="text" placeholder="Full Name" />
                          <label for="name">Name</label>
                      </div>
                      <div class="form-floating mb-3">
                          <input class="form-control" name="fathers_name" id="fathers_name" type="text" placeholder="Fathers Name" />
                          <label for="fathers_name">Fathers Name</label>
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                              <div class="form-floating mb-3 mb-md-0">
                                  <input class="form-control" id="birth_date" name="birth_date" type="date" placeholder="Birth Date" />
                                  <label for="birth_date">Birth Date</label>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-floating">
                                  <input class="form-control" id="phone" name="phone" type="text" placeholder="Phone" />
                                  <label for="phone">Phone</label>
                              </div>
                          </div>
                      </div>
                      <div class="form-floating mb-3">
                        <input class="form-control" name="institute" id="institute" type="text" placeholder="Institute Name" />
                        <label for="institute">Institute</label>
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-4">
                              <div class="form-floating">
                                  <input class="form-control" id="session" name="session" type="text" placeholder="Session" />
                                  <label for="session">Session</label>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-floating mb-3 mb-md-0">
                                  <input class="form-control" id="batch" name="batch" type="text" placeholder="Batch" />
                                  <label for="batch">Batch</label>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-floating mb-3 mb-md-0">
                                  <input class="form-control" id="institute_id" name="institute_id" type="text" placeholder="Institute Id" />
                                  <label for="institute_id">Institute Id</label>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save Student</button>
                    </div>
                  </form>
              </div>
            </div>
            
          </div>
    </div>
  </div>
</div>