<div class="uk-flex uk-flex-wrap uk-flex-wrap-around" uk-grid>
  @if ( tr_posts_field('flight_options') == 1)
    <div class="uk-width-1-3">
      <div class="uk-card uk-card-body ba b--near-white uk-grid-small uk-padding-small">
        <h3 class="uk-card-title"><i class="fas fa-plane-departure"></i> Flight options</h3>
        <table class="uk-table uk-table-hover uk-table-divider uk-table-small">
          <tbody>
            <tr>
              <td><small class="b">Flight class</small></td>
              <td><small class="ttc">{{ tr_posts_field('flight_class') }}</small></td>
            </tr>
            <tr>
              <td><small class="b">Food type</small></td>
              <td><small>{{ tr_posts_field('food_type') }}</small></td>
            </tr>
            <tr>
              <td><small class="b">Seat Preference</small></td>
              <td><small>{{ tr_posts_field('seat_preference') }}</small></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  @endif

  @if ( tr_posts_field('accommodation_options') == 1 )
    <div class="uk-width-1-3">
      <div class="uk-card uk-card-body ba b--near-white uk-padding-small">
        <h3 class="uk-card-title"><i class="fas fa-hotel"></i> Accomodation</h3>
        <table class="uk-table uk-table-hover uk-table-divider uk-table-small">
          <tbody>
            <tr>
              <td><small class="b">Property type</small></td>
              <td><small>{{ tr_posts_field('property_type') }}</small></td>
            </tr>
            <tr>
              <td><small class="b">Property rating</small></td>
              <td><small>{{ tr_posts_field('property_rating') }}</small></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  @endif

  @if ( tr_posts_field('transport_options') == 1 )
    <div class="uk-width-1-3">
      <div class="uk-card uk-card-body ba b--near-white uk-padding-small">
        <h3 class="uk-card-title"><i class="fas fa-plane-departure"></i> Transportation options</h3>
        <table class="uk-table uk-table-hover uk-table-divider uk-table-small">
          <tbody>
            <tr>
              <td><small class="b">Type</small></td>
              <td><small>{{ tr_posts_field('transport_type') }}</small></td>
            </tr>
            <tr>
              <td><small class="b">Car type</small></td>
              <td><small>{{ tr_posts_field('car_type') }}</small></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  @endif

</div>
