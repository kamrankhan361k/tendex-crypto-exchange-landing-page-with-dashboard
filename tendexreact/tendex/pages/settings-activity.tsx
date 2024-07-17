import { NextPage } from "next";
import SettingsLayouts from "../src/layouts/dashboard/SettingsLayouts";

const SettingsActivity: NextPage = () => {
  return (
    <SettingsLayouts name="Activity">
      <div className="card-body">
        <div className="row">
          <div className="col-xxl-12">
            <div className="card h-unset">
              <div className="card-header px-0">
                <h4 className="card-title">Third-Party Applications</h4>
              </div>
              <div className="card-body px-0">
                <div className="d-flex align-items-center">
                  <span className="me-3 icon-circle bg-warning text-white">
                    <i className="icofont-question-square"></i>
                  </span>
                  <div>
                    <h5 className="mb-0">
                      {`You haven't authorized any applications yet.`}
                    </h5>
                    <p>
                      After connecting an application with your account, you can
                      manage or revoke its access here.
                    </p>
                    <a className="btn btn-primary">Authorize now</a>
                  </div>
                </div>
              </div>
            </div>

            <div className="card h-unset">
              <div className="card-header px-0">
                <h4 className="card-title">Web Sessions</h4>

                <small>
                  These sessions are currently signed in to your account. Sign
                  out all other sessions
                </small>
              </div>
              <div className="card-body px-0">
                <div className="table-responsive">
                  <table className="table">
                    <thead>
                      <tr>
                        <th>Signed In</th>
                        <th>Browser</th>
                        <th>IP Address</th>
                        <th>Near</th>
                        <th>Current</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1 day ago</td>
                        <td>Chrome (Windows)</td>
                        <td>250.364.239.254</td>
                        <td>Bangladesh, Dhaka</td>
                        <td>
                          <span>
                            <i className="icofont-check-alt"></i>
                          </span>
                          <span>
                            <i className="icofont-close-line"></i>
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td>1 day ago</td>
                        <td>Chrome (Windows)</td>
                        <td>250.364.239.254</td>
                        <td>Bangladesh, Dhaka</td>
                        <td>
                          <span>
                            <i className="icofont-check-alt"></i>
                          </span>
                          <span>
                            <i className="icofont-close-line"></i>
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td>1 day ago</td>
                        <td>Chrome (Windows)</td>
                        <td>250.364.239.254</td>
                        <td>Bangladesh, Dhaka</td>
                        <td>
                          <span>
                            <i className="icofont-check-alt"></i>
                          </span>
                          <span>
                            <i className="icofont-close-line"></i>
                          </span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div className="card h-unset">
              <div className="card-header px-0">
                <h4 className="card-title">Confirmed Devices</h4>

                <small>
                  These devices are currently allowed to access your account.
                  Remove all other devices
                </small>
              </div>
              <div className="card-body px-0">
                <table className="table">
                  <thead>
                    <tr>
                      <th>Confirmed</th>
                      <th>Browser</th>
                      <th>IP Address</th>
                      <th>Near</th>
                      <th>Current</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1 day ago</td>
                      <td>Chrome (Windows)</td>
                      <td>250.364.239.254</td>
                      <td>Bangladesh, Dhaka</td>
                      <td>
                        <span>
                          <i className="icofont-check-alt"></i>
                        </span>
                        <span>
                          <i className="icofont-close-line"></i>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>8 days ago</td>
                      <td>Chrome (Windows)</td>
                      <td>250.364.239.254</td>
                      <td>Bangladesh, Dhaka</td>

                      <td>
                        <span>
                          <i className="icofont-check-alt"></i>
                        </span>
                        <span>
                          <i className="icofont-close-line"></i>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>15 days ago</td>
                      <td>Chrome (Windows)</td>
                      <td>250.364.239.254</td>
                      <td>Bangladesh, Dhaka</td>

                      <td>
                        <span>
                          <i className="icofont-check-alt"></i>
                        </span>
                        <span>
                          <i className="icofont-close-line"></i>
                        </span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div className="card h-unset">
              <div className="card-header px-0">
                <h4 className="card-title">Account Activity</h4>

                <small>Recent activity on your account.</small>
              </div>
              <div className="card-body px-0">
                <table className="table">
                  <thead>
                    <tr>
                      <th>Action</th>
                      <th>Source</th>
                      <th>IP Address</th>
                      <th>Location</th>
                      <th>When</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>verified second factor</td>
                      <td>api</td>
                      <td>157.119.239.254</td>
                      <td>Bangladesh</td>
                      <td>
                        <a href="#">about 1 hour ago</a>
                      </td>
                    </tr>
                    <tr>
                      <td>verified second factor</td>
                      <td>api</td>
                      <td>157.119.239.254</td>
                      <td>Bangladesh</td>
                      <td>
                        <a href="#">about 2 hours ago</a>
                      </td>
                    </tr>
                    <tr>
                      <td>second factor failure</td>
                      <td>api</td>
                      <td>157.119.239.254</td>
                      <td>Bangladesh</td>
                      <td>
                        <a href="#">about 2 hours ago</a>
                      </td>
                    </tr>
                    <tr>
                      <td>device confirmation completed</td>
                      <td>web</td>
                      <td>157.119.239.254</td>
                      <td>Bangladesh</td>
                      <td>
                        <a href="#">1 day ago</a>
                      </td>
                    </tr>
                    <tr>
                      <td>signin</td>
                      <td>web</td>
                      <td>157.119.239.254</td>
                      <td>Bangladesh</td>
                      <td>
                        <a href="#">1 day ago</a>
                      </td>
                    </tr>
                    <tr>
                      <td>verified second factor</td>
                      <td>web</td>
                      <td>157.119.239.254</td>
                      <td>Bangladesh</td>
                      <td>
                        <a href="#">1 day ago</a>
                      </td>
                    </tr>
                    <tr>
                      <td>signout</td>
                      <td>web</td>
                      <td>157.119.239.214</td>
                      <td>Bangladesh</td>
                      <td>
                        <a href="#">8 days ago</a>
                      </td>
                    </tr>
                    <tr>
                      <td>signin</td>
                      <td>web</td>
                      <td>157.119.239.214</td>
                      <td>Bangladesh</td>
                      <td>
                        <a href="#">8 days ago</a>
                      </td>
                    </tr>
                    <tr>
                      <td>verified second factor</td>
                      <td>web</td>
                      <td>157.119.239.214</td>
                      <td>Bangladesh</td>
                      <td>
                        <a href="#">8 days ago</a>
                      </td>
                    </tr>
                    <tr>
                      <td>signout</td>
                      <td>api</td>
                      <td>157.119.239.214</td>
                      <td>Bangladesh</td>
                      <td>
                        <a href="#">8 days ago</a>
                      </td>
                    </tr>
                    <tr>
                      <td>signout</td>
                      <td>api</td>
                      <td>157.119.239.214</td>
                      <td>Bangladesh</td>
                      <td>
                        <a href="#">8 days ago</a>
                      </td>
                    </tr>
                    <tr>
                      <td>device confirmation completed</td>
                      <td>web</td>
                      <td>157.119.239.214</td>
                      <td>Bangladesh</td>
                      <td>
                        <a href="#">8 days ago</a>
                      </td>
                    </tr>
                    <tr>
                      <td>signin</td>
                      <td>web</td>
                      <td>157.119.239.214</td>
                      <td>Bangladesh</td>
                      <td>
                        <a href="#">8 days ago</a>
                      </td>
                    </tr>
                    <tr>
                      <td>verified second factor</td>
                      <td>web</td>
                      <td>157.119.239.214</td>
                      <td>Bangladesh</td>
                      <td>
                        <a href="#">8 days ago</a>
                      </td>
                    </tr>
                    <tr>
                      <td>signout</td>
                      <td>api</td>
                      <td>157.119.239.214</td>
                      <td>Bangladesh</td>
                      <td>
                        <a href="#">15 days ago</a>
                      </td>
                    </tr>
                    <tr>
                      <td>verified second factor</td>
                      <td>web</td>
                      <td>157.119.239.214</td>
                      <td>Bangladesh</td>
                      <td>
                        <a href="#">15 days ago</a>
                      </td>
                    </tr>
                    <tr>
                      <td>signin</td>
                      <td>web</td>
                      <td>157.119.239.214</td>
                      <td>Bangladesh</td>
                      <td>
                        <a href="#">15 days ago</a>
                      </td>
                    </tr>
                    <tr>
                      <td>signout</td>
                      <td>api</td>
                      <td>157.119.239.214</td>
                      <td>Bangladesh</td>
                      <td>
                        <a href="#">15 days ago</a>
                      </td>
                    </tr>
                    <tr>
                      <td>verified second factor</td>
                      <td>web</td>
                      <td>23.106.249.39</td>
                      <td>Singapore</td>
                      <td>
                        <a href="#">15 days ago</a>
                      </td>
                    </tr>
                    <tr>
                      <td>verified second factor</td>
                      <td>api</td>
                      <td>157.119.239.214</td>
                      <td>Bangladesh</td>
                      <td>
                        <a href="#">15 days ago</a>
                      </td>
                    </tr>
                    <tr>
                      <td>phone verified</td>
                      <td>api</td>
                      <td>157.119.239.214</td>
                      <td>Bangladesh</td>
                      <td>
                        <a href="#">15 days ago</a>
                      </td>
                    </tr>
                    <tr>
                      <td>phone added</td>
                      <td>api</td>
                      <td>157.119.239.214</td>
                      <td>Bangladesh</td>
                      <td>
                        <a href="#">15 days ago</a>
                      </td>
                    </tr>
                    <tr>
                      <td>signin</td>
                      <td>api</td>
                      <td>157.119.239.214</td>
                      <td>Bangladesh</td>
                      <td>
                        <a href="#">15 days ago</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div className="card h-unset mb-0">
              <div className="card-header px-0">
                <h4 className="card-title">Close Account</h4>
              </div>
              <div className="card-body px-0">
                <p>
                  Withdraw funds and close your Tendex account -
                  <span className="text-danger">this cannot be undone</span>
                </p>
                <a href="#" className="btn btn-danger">
                  Close Account
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </SettingsLayouts>
  );
};

export default SettingsActivity;
