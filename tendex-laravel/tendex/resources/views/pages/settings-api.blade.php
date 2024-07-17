<x-dashboard.settings-layout pageTitle="API">
     <div class="card-body">
          <div class="row">
              <div class="col-xxl-12">
                  <div class="card">
                      <div class="card-header px-0">
                          <h4 class="card-title">Create API Key</h4>
                      </div>
                      <div class="card-body px-0">
                          <form action="#">
                              <div class="row g-3">
                                  <div class="col-xl-6 col-md-6">
                                      <label class="form-label">Generate New Key</label>
                                      <input type="text" name="usd_amount" class="form-control"
                                          placeholder="Enter Passphrase">
                                  </div>
                                  <div class="col-xl-6 col-md-6">
                                      <label class="form-label">Confirm Passphrase</label>
                                      <input type="text" name="usd_amount" class="form-control"
                                          placeholder="Re-enter passphrase">
                                  </div>
                                  <div class="col-auto">
                                      <button class="btn btn-primary">Create API Keys</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
              <div class="col-xl-12">
                  <div class="card mb-0">
                      <div class="card-header px-0">
                          <h4 class="card-title">Your API Keys</h4>
                      </div>
                      <div class="card-body px-0">
                          <div class="table-responsive">
                              <table class="table">
                                  <thead>
                                      <tr>
                                          <th>Key</th>
                                          <th>Status</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>69e387f1-31c3-45ad-9c68-5a51e5e78b43</td>
                                          <td>
                                              <div class="form-check form-switch">
                                                  <input class="form-check-input" type="checkbox"
                                                      checked>
                                              </div>
                                          </td>
                                          <td>
                                              <span>
                                                  <i class="icofont-ui-delete"></i>
                                              </span>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>69e387f1-31c3-45ad-9c68-5a51e5e78b43</td>
                                          <td>
                                              <div class="form-check form-switch">
                                                  <input class="form-check-input" type="checkbox">
                                              </div>
                                          </td>
                                          <td>
                                              <span>
                                                  <i class="icofont-ui-delete"></i>
                                              </span>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>69e387f1-31c3-45ad-9c68-5a51e5e78b43</td>
                                          <td>
                                              <div class="form-check form-switch">
                                                  <input class="form-check-input" type="checkbox">
                                              </div>
                                          </td>
                                          <td>
                                              <span>
                                                  <i class="icofont-ui-delete"></i>
                                              </span>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>69e387f1-31c3-45ad-9c68-5a51e5e78b43</td>
                                          <td>
                                              <div class="form-check form-switch">
                                                  <input class="form-check-input" type="checkbox">
                                              </div>
                                          </td>
                                          <td>
                                              <span>
                                                  <i class="icofont-ui-delete"></i>
                                              </span>
                                          </td>
                                      </tr>
                                      <tr >
                                          <td class="pb-0">69e387f1-31c3-45ad-9c68-5a51e5e78b43</td>
                                          <td class="pb-0">
                                              <div class="form-check form-switch">
                                                  <input class="form-check-input" type="checkbox">
                                              </div>
                                          </td class="pb-0">
                                          <td class="pb-0">
                                              <span>
                                                  <i class="icofont-ui-delete"></i>
                                              </span>
                                          </td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
</x-dashboard.settings-layout>