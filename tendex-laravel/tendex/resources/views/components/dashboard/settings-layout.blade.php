<x-dashboard.dashboard-layout>
     <div class="content-body">
          <div class="container">
            <div class="row">
              <div class="col-xxl-12 col-xl-12">
                <div class="page-title">
                  <h4>{{ $pageTitle }}</h4>
                </div>
                <div class="card">
                  <div class="card-header">
                    <div class="settings-menu">
          <a href="{{url('settings-profile')}}">Profile</a>
          <a href="{{url('settings-application')}}">Application</a>
          <a href="{{url('settings-security')}}">Security</a>
          <a href="{{url('settings-activity')}}">Activity</a>
          <a href="{{url('settings-privacy')}}">Privacy</a>
          <a href="{{url('settings-payment-method')}}">Payment Method</a>
          <a href="{{url('settings-api')}}">API</a>
          <a href="{{url('settings-fees')}}">Fees</a>
      </div>
                  </div>
                  {{ $slot }}
                </div>
              </div>
            </div>
          </div>
        </div>
</x-dashboard.dashboard-layout>