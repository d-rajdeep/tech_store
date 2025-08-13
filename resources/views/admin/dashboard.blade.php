@extends('admin.layouts.app')

@section('main-content')

 <div class="content">
        <div class="pb-5">
          <div class="row g-4">
            <div class="col-12 col-xxl-6">
              <div class="mb-8">
                <h2 class="mb-2">Ecommerce Dashboard</h2>
                <h5 class="text-body-tertiary fw-semibold">Here’s what’s going on at your business right now</h5>
              </div>
              <div class="row align-items-center g-4">
                <div class="col-12 col-md-auto">
                  <div class="d-flex align-items-center"><span class="fa-stack"
                      style="min-height: 46px;min-width: 46px;"><span
                        class="fa-solid fa-square fa-stack-2x dark__text-opacity-50 text-success-light"
                        data-fa-transform="down-4 rotate--10 left-4"></span><span
                        class="fa-solid fa-circle fa-stack-2x stack-circle text-stats-circle-success"
                        data-fa-transform="up-4 right-3 grow-2"></span><span
                        class="fa-stack-1x fa-solid fa-star text-success "
                        data-fa-transform="shrink-2 up-8 right-6"></span></span>
                    <div class="ms-3">
                      <h4 class="mb-0">57 new orders</h4>
                      <p class="text-body-secondary fs-9 mb-0">Awating processing</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-auto">
                  <div class="d-flex align-items-center"><span class="fa-stack"
                      style="min-height: 46px;min-width: 46px;"><span
                        class="fa-solid fa-square fa-stack-2x dark__text-opacity-50 text-warning-light"
                        data-fa-transform="down-4 rotate--10 left-4"></span><span
                        class="fa-solid fa-circle fa-stack-2x stack-circle text-stats-circle-warning"
                        data-fa-transform="up-4 right-3 grow-2"></span><span
                        class="fa-stack-1x fa-solid fa-pause text-warning "
                        data-fa-transform="shrink-2 up-8 right-6"></span></span>
                    <div class="ms-3">
                      <h4 class="mb-0">5 orders</h4>
                      <p class="text-body-secondary fs-9 mb-0">On hold</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-auto">
                  <div class="d-flex align-items-center"><span class="fa-stack"
                      style="min-height: 46px;min-width: 46px;"><span
                        class="fa-solid fa-square fa-stack-2x dark__text-opacity-50 text-danger-light"
                        data-fa-transform="down-4 rotate--10 left-4"></span><span
                        class="fa-solid fa-circle fa-stack-2x stack-circle text-stats-circle-danger"
                        data-fa-transform="up-4 right-3 grow-2"></span><span
                        class="fa-stack-1x fa-solid fa-xmark text-danger "
                        data-fa-transform="shrink-2 up-8 right-6"></span></span>
                    <div class="ms-3">
                      <h4 class="mb-0">15 products</h4>
                      <p class="text-body-secondary fs-9 mb-0">Out of stock</p>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="bg-body-secondary mb-6 mt-4" />
              <div class="row flex-between-center mb-4 g-3">
                <div class="col-auto">
                  <h3>Total sells</h3>
                  <p class="text-body-tertiary lh-sm mb-0">Payment received across all channels</p>
                </div>
                <div class="col-8 col-sm-4"><select class="form-select form-select-sm" id="select-gross-revenue-month">
                    <option>Aug 1 - 31, 2025</option>
                    <option>July 1 - 31, 2025</option>
                    <option>Jun 1 - 30, 2025</option>
                  </select></div>
              </div>
              <div class="echart-total-sales-chart" style="min-height:320px;width:100%"></div>
            </div>
            <div class="col-12 col-xxl-6">
              <div class="row g-3">
                <div class="col-12 col-md-6">
                  <div class="card h-100">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h5 class="mb-1">Total orders<span
                              class="badge badge-phoenix badge-phoenix-warning rounded-pill fs-9 ms-2"><span
                                class="badge-label">-6.8%</span></span></h5>
                          <h6 class="text-body-tertiary">Last 7 days</h6>
                        </div>
                        <h4>16,247</h4>
                      </div>
                      <div class="d-flex justify-content-center px-4 py-6">
                        <div class="echart-total-orders" style="height:85px;width:115px"></div>
                      </div>
                      <div class="mt-2">
                        <div class="d-flex align-items-center mb-2">
                          <div class="bullet-item bg-primary me-2"></div>
                          <h6 class="text-body fw-semibold flex-1 mb-0">Completed</h6>
                          <h6 class="text-body fw-semibold mb-0">52%</h6>
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="bullet-item bg-primary-subtle me-2"></div>
                          <h6 class="text-body fw-semibold flex-1 mb-0">Pending payment</h6>
                          <h6 class="text-body fw-semibold mb-0">48%</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="card h-100">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h5 class="mb-1">New customers<span
                              class="badge badge-phoenix badge-phoenix-warning rounded-pill fs-9 ms-2"> <span
                                class="badge-label">+26.5%</span></span></h5>
                          <h6 class="text-body-tertiary">Last 7 days</h6>
                        </div>
                        <h4>356</h4>
                      </div>
                      <div class="pb-0 pt-4">
                        <div class="echarts-new-customers" style="height:180px;width:100%;"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="card h-100">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h5 class="mb-2">Top coupons</h5>
                          <h6 class="text-body-tertiary">Last 7 days</h6>
                        </div>
                      </div>
                      <div class="pb-4 pt-3">
                        <div class="echart-top-coupons" style="height:115px;width:100%;"></div>
                      </div>
                      <div>
                        <div class="d-flex align-items-center mb-2">
                          <div class="bullet-item bg-primary me-2"></div>
                          <h6 class="text-body fw-semibold flex-1 mb-0">Percentage discount</h6>
                          <h6 class="text-body fw-semibold mb-0">72%</h6>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                          <div class="bullet-item bg-primary-lighter me-2"></div>
                          <h6 class="text-body fw-semibold flex-1 mb-0">Fixed card discount</h6>
                          <h6 class="text-body fw-semibold mb-0">18%</h6>
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="bullet-item bg-info-dark me-2"></div>
                          <h6 class="text-body fw-semibold flex-1 mb-0">Fixed product discount</h6>
                          <h6 class="text-body fw-semibold mb-0">10%</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="card h-100">
                    <div class="card-body d-flex flex-column">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h5 class="mb-2">Paying vs non paying</h5>
                          <h6 class="text-body-tertiary">Last 7 days</h6>
                        </div>
                      </div>
                      <div class="d-flex justify-content-center pt-3 flex-1">
                        <div class="echarts-paying-customer-chart" style="height:100%;width:100%;"></div>
                      </div>
                      <div class="mt-3">
                        <div class="d-flex align-items-center mb-2">
                          <div class="bullet-item bg-primary me-2"></div>
                          <h6 class="text-body fw-semibold flex-1 mb-0">Paying customer</h6>
                          <h6 class="text-body fw-semibold mb-0">30%</h6>
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="bullet-item bg-primary-subtle me-2"></div>
                          <h6 class="text-body fw-semibold flex-1 mb-0">Non-paying customer</h6>
                          <h6 class="text-body fw-semibold mb-0">70%</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis pt-7 border-y">
          <div data-list='{"valueNames":["product","customer","rating","review","time"],"page":6}'>
            <div class="row align-items-end justify-content-between pb-5 g-3">
              <div class="col-auto">
                <h3>Latest reviews</h3>
                <p class="text-body-tertiary lh-sm mb-0">Payment received across all channels</p>
              </div>
              <div class="col-12 col-md-auto">
                <div class="row g-2 gy-3">
                  <div class="col-auto flex-1">
                    <div class="search-box">
                      <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                          class="form-control search-input search form-control-sm" type="search" placeholder="Search"
                          aria-label="Search" />
                        <span class="fas fa-search search-box-icon"></span>
                      </form>
                    </div>
                  </div>
                  <div class="col-auto"><button
                      class="btn btn-sm btn-phoenix-secondary bg-body-emphasis bg-body-hover me-2" type="button">All
                      products</button><button
                      class="btn btn-sm btn-phoenix-secondary bg-body-emphasis bg-body-hover action-btn" type="button"
                      data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                      data-bs-reference="parent"><span class="fas fa-ellipsis-h"
                        data-fa-transform="shrink-2"></span></button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="table-responsive mx-n1 px-1 scrollbar">
              <table class="table fs-9 mb-0 border-top border-translucent">
                <thead>
                  <tr>
                    <th class="white-space-nowrap fs-9 ps-0 align-middle">
                      <div class="form-check mb-0 fs-8"><input class="form-check-input"
                          id="checkbox-bulk-reviews-select" type="checkbox"
                          data-bulk-select='{"body":"table-latest-review-body"}' /></div>
                    </th>
                    <th class="sort white-space-nowrap align-middle" scope="col"></th>
                    <th class="sort white-space-nowrap align-middle" scope="col" style="min-width:360px;"
                      data-sort="product">PRODUCT</th>
                    <th class="sort align-middle" scope="col" data-sort="customer" style="min-width:200px;">CUSTOMER
                    </th>
                    <th class="sort align-middle" scope="col" data-sort="rating" style="min-width:110px;">RATING</th>
                    <th class="sort align-middle" scope="col" style="max-width:350px;" data-sort="review">REVIEW</th>
                    <th class="sort text-start ps-5 align-middle" scope="col" data-sort="status">STATUS</th>
                    <th class="sort text-end align-middle" scope="col" data-sort="time">TIME</th>
                    <th class="sort text-end pe-0 align-middle" scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list" id="table-latest-review-body">
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="fs-9 align-middle ps-0">
                      <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox"
                          data-bulk-select-row='{"product":"Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management & Skin Temperature Trends, Carbon/Graphite, One Size (S & L Bands)","productImage":"/products/60x60/1.png","customer":{"name":"Richard Dawkins","avatar":""},"rating":5,"review":"This Fitbit is fantastic! I was trying to be in better shape and needed some motivation, so I decided to treat myself to a new Fitbit.","status":{"title":"Approved","badge":"success","icon":"check"},"time":"Just now"}' />
                      </div>
                    </td>

                    <div class="row align-items-center py-1">
                      <div class="pagination d-none"></div>
                      <div class="col d-flex fs-9">
                        <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info">
                        </p><a class="fw-semibold" href="#!" data-list-view="*">View all<span
                            class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a
                          class="fw-semibold d-none" href="#!" data-list-view="less">View Less</a>
                      </div>
                      <div class="col-auto d-flex">
                        <button class="btn btn-link px-1 me-1" type="button" title="Previous"
                          data-list-pagination="prev"><span
                            class="fas fa-chevron-left me-2"></span>Previous</button><button
                          class="btn btn-link px-1 ms-1" type="button" title="Next"
                          data-list-pagination="next">Next<span class="fas fa-chevron-right ms-2"></span></button>
                      </div>
                    </div>
            </div>
          </div>

          @include('admin.layouts.footer')
        </div>   
@endsection