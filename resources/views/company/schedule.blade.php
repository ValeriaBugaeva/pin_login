@extends('layouts/contentLayoutMaster')

@section('title', 'Schedule')

@section('vendor-style')
  {{-- vendor css files --}}

@endsection
@section('page-style')
  {{-- Page css files --}}
  <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.css">
  <link rel="stylesheet" media="all" href="/admin/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" media="all" href="/admin/assets/css/style.css">
  <script src="https://kit.fontawesome.com/274c7ce535.js" crossorigin="anonymous"></script>
@endsection

@section('content')
<!-- Add the code here -->


  <div class="main-wrapper">
    <div id="js-react-app-container">

      <div id="schedule-builder-block">
        <div id="schedule-builder" class="day-view with-wages">
          <div>
            <div class="header-controls utility-nav">
              <div class="right-align-block">
                <section>
                  <a class="btn btn-primary-action export-roster text-white" id="export-btn">
                    <i class="icons-export"></i>
                    Export
                  </a>
                  <a class="btn btn-success-action schedule-header__button export-roster text-white" id="publish-btn"
                    style="display: none;">
                    <i class="icons-export"></i>
                    Publish
                  </a>
                </section>
                <section class="prxs position--relative schedule-builder__combined-buttons custom-tooltip">
                  <a class="popClass schedule-builder__tool-buttons text--gray-dark border-gray-medium-light rounded inline-block position--relative text--xs valign--t bordrered bg--white"
                    style="padding: 9px 16px;">
                    <span class="valign--m mrxxs">
                      <i class="fas fa-wrench text--sm"></i>
                    </span>
                    <span class="valign--m">
                      Tools
                    </span>
                  </a>
                  <div id="myContent" style="display: none;">
                    <ul class="toolbar-list">
                      <li class="tl-main"><a>12 Feb 2020</a></li>
                      <li class="tl-main"><a>12 Feb 2020</a></li>
                      <li class="tl-main"><a>12 Feb 2020</a></li>
                      <li class="tl-main"><a>12 Feb 2020</a></li>
                    </ul>
                  </div>
                  <a class="popClass js-open-tools schedule-builder__tool-buttons text--gray-dark border-gray-medium-light rounded inline-block position--relative text--xs valign--t bordrered bg--white"
                    style="padding: 9px 16px;display: none;" id="copy-btn">
                    <span class="valign--m mrxxs">
                      <i class="fas fa-clone text--sm" aria-hidden="true"></i>
                    </span>
                    <span class="valign--m">
                      Copy
                    </span>
                  </a>
                  <div id="myContent" style="display: none;">
                    <ul class="toolbar-list">
                      <li class="tl-main"><a>Add</a><i class="fa fa-caret-right text--gray-dark right-icon"
                          aria-hidden="true"></i>
                        <ul class="tl-inner-main">
                          <li>
                            <a class="add-event">
                              <div id="react-purple-star-wrapper_add-event">
                                <div class="Box Box--spacebetween Box--align-items-center PurpleStarWrapper"
                                  style="height: 100%;"><span>An Event</span>
                                  <div class="Box inline" style=""><img alt="Purple Star" width="34"
                                      src="/admin/assets/img/paid_plan_indicator.png"
                                      style="padding-left: 5px; padding-right: 5px;"></div>
                                </div>
                              </div>
                            </a>
                          </li>
                          <li>An Event</li>
                          <li>An Event</li>
                        </ul>
                      </li>
                      <li class="tl-main"><a>Clear</a><i class="fa fa-caret-right text--gray-dark right-icon"
                          aria-hidden="true"></i></li>
                      <li class="tl-main"><a>Sort by</a><i class="fa fa-caret-right text--gray-dark right-icon"
                          aria-hidden="true"></i>
                      </li>
                      <li class="tl-main"><a>Show/Hide</a><i class="fa fa-caret-right text--gray-dark right-icon"
                          aria-hidden="true"></i>
                      </li>
                      <li><a>Templates</a></li>
                      <li><a>View Publish History</a></li>
                    </ul>
                  </div>
                  <a class="js-print schedule-builder__tool-buttons text--gray-dark border-gray-medium-light rounded inline-block position--relative text--xs valign--t bordrered bg--white"
                    style="padding: 9px 16px;">
                    <span class="valign--m mrxxs">
                      <i class="fa fa-print text--sm"></i>
                    </span>
                    <span class="valign--m">
                      Print
                    </span>
                  </a>
                </section>
              </div>
              <div class="left-toolbar">
                <section class="week-picker">
                  <a class="prev">
                    <span></span>
                  </a>
                  <div class="date-period-wrapper date-period-wrapper--s">
                    <div class="date-period">
                    </div>
                  </div>
                  <a class="next">
                    <span></span>
                  </a>
                </section>
                <div class="navigation-type schedule-navigation-rollout">
                  <div class="select-wrapper">
                    <div class="dropdown layout-dropdown">
                      <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Day
                      </button>
                      <div class="dropdown-menu custom-dropdown" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" id="daily" href="#">Day</a>
                        <a class="dropdown-item" id="weekly" href="#">Week</a>
                        <a class="dropdown-item" id="monthly" href="#">Month</a>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="view-by">
                  <div class="select-wrapper">
                    <div class="dropdown day-drop">
                      <select class="form-select" aria-label="Default select example">
                        <option selected>By Employee</option>
                        <option value="1">By Start Time</option>
                      </select>
                      <!-- <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        By Employee
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">
                          By Employee
                        </a>
                        <a class="dropdown-item" href="#"> By Start Time</a>
                      </div> -->
                    </div>
                    <div class="dropdown week-drop" style="display: none;">
                      <select class="form-select" aria-label="Default select example">
                        <option selected> Employee View</option>
                        <option value="1">Department View</option>
                        <option value="2">Role View</option>
                      </select>

                      <!-- <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Employee View
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">
                          Employee View
                        </a>
                        <a class="dropdown-item" href="#">Department View</a>
                        <a class="dropdown-item" href="#">Role View</a>
                      </div> -->
                    </div>
                  </div>
                </div>
                <a class="border inline-block js-today position--relative rounded schedule-builder__top-controls text--blue text--xs valign--t bg--white"
                  style="border-color: #E5E6E7; padding: 9px 25px;">
                  <span class="valign--m">
                    Today
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="schedule-table-wrapper">
            <div class="daily table-responsive" style="display:block">
              <table class="main-table schedule-table shift-type-all">
                <thead>
                  <tr class="schedule-table__header">
                    <th>
                      <div class="position--relative inline-block flex6 mtxxs schedule-table__header-options">
                        <input
                          class="js-search-name float-l btn-group--input btn-group schedule-table__employee-search-btn"
                          name="search" type="text">
                        <i class="fa fa-search schedule-table__employee-search--icon"></i>
                        <div class="inline-block float-r">
                          <a
                            class="js-filter-menu schedule-table__icons inline-block paxs text--gray-dark position--relative js-tooltip">
                            <i class="fa fa-filter text--xxs"></i>
                          </a>
                        </div>
                      </div>
                      <a class="js-blackout-day blackout-day text--xxs text--red hide no-print" style="display: none;">
                        Limited Time-Off
                      </a>
                    </th>
                    <th class="js-9am hours-column" valign="top" style="width: 10.63%;">
                      <div class="text--sm text--medium">
                        9am
                      </div>
                    </th>
                    <th class="js-10am hours-column" valign="top" style="width: 10.63%;">
                      <div class="text--sm text--medium">
                        10am
                      </div>
                    </th>
                    <th class="js-11am hours-column" valign="top" style="width: 10.63%;">
                      <div class="text--sm text--medium">
                        11am
                      </div>
                    </th>
                    <th class="js-12pm hours-column" valign="top" style="width: 10.63%;">
                      <div class="text--sm text--medium">
                        12pm
                      </div>
                    </th>
                    <th class="js-1pm hours-column" valign="top" style="width: 10.63%;">
                      <div class="text--sm text--medium">
                        1pm
                      </div>
                    </th>
                    <th class="js-2pm hours-column" valign="top" style="width: 10.63%;">
                      <div class="text--sm text--medium">
                        2pm
                      </div>
                    </th>
                    <th class="js-3pm hours-column" valign="top" style="width: 10.63%;">
                      <div class="text--sm text--medium">
                        3pm
                      </div>
                    </th>
                    <th class="js-4pm hours-column" valign="top" style="width: 10.63%;">
                      <div class="text--sm text--medium">
                        4pm
                      </div>
                    </th>
                  </tr>
                </thead>
                <tbody class="open-shifts">
                  <tr class="main-row empty-row">
                    <td class="control-cell">
                      <div class="body-name">
                        Open
                      </div>
                      <div class="schedule-day-view__shift-actions">
                        <a class="assign" style="display: none;">
                          assign
                        </a>
                      </div>
                    </td>
                    <td data-day="9am" class="popOver">
                      <div class="cell">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td data-day="10am" class="popOver">
                      <div class="cell">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td data-day="11am" class="popOver">
                      <div class="cell">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td data-day="12pm" class="popOver">
                      <div class="cell">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td data-day="1pm" class="popOver">
                      <div class="cell">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td data-day="2pm" class="popOver">
                      <div class="cell">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td data-day="3pm" class="popOver">
                      <div class="cell">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td data-day="4pm" class="popOver">
                      <div class="cell">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
                <tbody class="user-body shift-body" data-id="549693934">
                  <tr class="main-row empty-row">
                    <td class="control-cell user-info">
                      <div class="user-block">
                        <div class="display-flex space-between">
                          <div>
                            <div class="avatar micro">
                              <img src="/admin/assets/img/kb_medium.png">
                              <div class="opacity-border"></div>
                            </div>
                            <div class="user-info">
                              <div class="name">
                                ahsan a.
                              </div>
                              <a class="counters" target="_blank">
                                <span class="hours">
                                  <span class="counter">8.00</span>
                                  hrs
                                </span>
                                <span class="hour-wage-separator">
                                  /
                                </span>
                                <span>
                                  <span class="counter">$0.00</span>
                                </span>
                              </a>
                            </div>
                          </div>
                          <div class="user-icons">
                          </div>
                        </div>
                      </div>
                      <div class="schedule-day-view__shift-actions">
                      </div>
                    </td>

                    <td data-day="9am" class="unpublished popOver">
                      <div class="cell">
                        <div class="color-td shift-block js-shift ui-resizable" data-id="559584736" draggable="true"
                          style="position: absolute; width: 800%; left: 0%;">
                          <div class="period">
                            <section class="data red two-lines">
                              <div class="hover-action">
                                <div class="fa fa-trash hover-action--secondary js-delete mrxs"></div>
                                <div class="fa fa-plus hover-action--primary js-add-new mlxs"></div>
                              </div>
                              <p>
                                <span class="data time red">9am - 5pm</span>
                              </p>
                              <p>
                                <span class="role-name">
                                  Bartender
                                </span>
                              </p>
                            </section>
                          </div>
                          <div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div>
                          <div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div>
                        </div>
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td data-day="10am" class="popOver">

                      <div class="cell" ondrop="drop(event)" ondragover="allowDrop(event)">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td data-day="11am" class="popOver">
                      <div class="cell">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td data-day="12pm" class="popOver">
                      <div class="cell">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title  ">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td data-day="1pm" class="popOver">
                      <div class="cell">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title  ">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td data-day="2pm" class="popOver">
                      <div class="cell">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title  ">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td data-day="3pm" class="popOver">
                      <div class="cell">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title  ">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td data-day="4pm" class="popOver">
                      <div class="cell">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title ">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
                <tbody class="user-body" data-id="11456263" style="display: table-row-group;">
                  <tr class="main-row empty-row">
                    <td class="control-cell user-info">
                      <div class="user-block">
                        <div class="display-flex space-between">
                          <div>
                            <div class="avatar micro">
                              <img src="/admin/assets/img/kb_medium.png">
                              <div class="opacity-border"></div>
                            </div>
                            <div class="user-info">
                              <div class="name">
                                kevin b.
                              </div>
                              <a class="counters" target="_blank">
                                <span class="hours">
                                  <span class="counter">
                                    0
                                  </span>
                                  hrs
                                </span>
                                <span class="hour-wage-separator">
                                  /
                                </span>
                              </a>
                            </div>
                          </div>
                          <div class="user-icons">
                            <i class="inline-block fa js-tooltip cursor--pointer fa-eye not-viewed"
                              data-original-title="Schedule Not Viewed" data-toggle="tooltip" data-html="true"></i>
                          </div>
                        </div>
                      </div>
                      <div class="schedule-day-view__shift-actions">
                      </div>
                    </td>
                    <td data-day="9am" class="popOver">
                      <div class="cell">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title ">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td data-day="10am" class="popOver">
                      <div class="cell">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift"
                          data-target="webuiPopover8">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td data-day="11am" class="popOver">
                      <div class="cell">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift"
                          data-target="webuiPopover9">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td data-day="12pm" class="popOver">
                      <div class="cell">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td data-day="1pm" class="popOver">
                      <div class="cell">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td data-day="2pm" class="popOver">
                      <div class="cell">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td data-day="3pm" class="popOver">
                      <div class="cell">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td data-day="4pm" class="popOver">
                      <div class="cell">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift"
                          data-target="webuiPopover7">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="weekly table-responsive" style="display:none">
              <table id="sortable"
                class="main-table schedule-table schedule-table--week-with-add  ui-sortable shift-type-all">
                <thead>
                  <tr class="schedule-table__header">
                    <th>
                      <div
                        class="position--relative inline-block flex6 mtxxs schedule-table__header-options display-flex center-aligned-items">
                        <div class="flex4 js-filters-select-container text--capitalize schedule-table__filters-select">
                          <div class="dropdown weekview-droptown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              All Employees
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"
                              style="will-change: transform;">
                              <a class="dropdown-item" href="#"> All Employees</a>
                              <a class="dropdown-item" href="#"> Sheduled Only</a>
                              <div class="js-add-employees add-employees-link ">
                                + Add Employees
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="flex2 text--right">
                          <input class="hidden js-search-name schedule-table__search-input" name="search" type="text">
                          <a class="js-search-link">
                            <i class="fa fa-search text--gray-xdark"></i>
                          </a>
                        </div>
                      </div>
                    </th>
                    <th class="text--gray-xdark monday today">
                      <a class="js-day-view-link day-view-link">
                        <div class="js-weekday text--regular text--sm">Today</div>
                        <div class="js-date text--xl text--regular schedule-table__header-date">08</div>
                      </a>
                    </th>
                    <th class="text--gray-xdark tuesday">
                      <a class="js-day-view-link day-view-link">
                        <div class="js-weekday text--regular text--sm">Tue</div>
                        <div class="js-date text--xl text--regular schedule-table__header-date">09</div>
                      </a>
                    </th>
                    <th class="text--gray-xdark wednesday">
                      <a class="js-day-view-link day-view-link">
                        <div class="js-weekday text--regular text--sm">Wed</div>
                        <div class="js-date text--xl text--regular schedule-table__header-date">10</div>
                      </a>
                    </th>
                    <th class="text--gray-xdark thursday">
                      <a class="js-day-view-link day-view-link">
                        <div class="js-weekday text--regular text--sm">Thu</div>
                        <div class="js-date text--xl text--regular schedule-table__header-date">11</div>
                      </a>
                    </th>
                    <th class="text--gray-xdark friday">
                      <a class="js-day-view-link day-view-link">
                        <div class="js-weekday text--regular text--sm">Fri</div>
                        <div class="js-date text--xl text--regular schedule-table__header-date">12</div>
                      </a>
                    </th>
                    <th class="text--gray-xdark saturday">
                      <a class="js-day-view-link day-view-link">
                        <div class="js-weekday text--regular text--sm">Sat</div>
                        <div class="js-date text--xl text--regular schedule-table__header-date">13</div>
                      </a>
                    </th>
                    <th class="text--gray-xdark sunday">
                      <a class="js-day-view-link day-view-link">
                        <div class="js-weekday text--regular text--sm">Sun</div>
                        <div class="js-date text--xl text--regular schedule-table__header-date">14</div>
                      </a>
                    </th>
                  </tr>
                </thead>
                <tbody class="events" style="display: table-row-group;">
                  <tr class="main-row empty-row">
                    <td class="control-cell">
                      <div class="text--capitalize text--medium text--s text--purple ">
                        Events
                        <span class="js-events-counter mr4"></span>
                        <div class="js-purple-star inline-block">
                          <div class="js-tooltip inline-block" title=""
                            data-original-title="This feature is part of your trial of  Plus which ends on February 4th. Call your account specialist on 415-951-3862 to learn more.">
                            <img src="/admin/assets/img/paid_plan_indicator.png" width="24px">
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="valign--m monday popOverEvent" data-day="monday" data-wday="0">
                      <div class="cell" ondrop="drop(event)" ondragover="allowDrop(event)">
                        <div class="color-td add-new js-new-event">
                          <div class="title ">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="valign--m popOverEvent tuesday" data-day="tuesday" data-wday="1">
                      <div class="cell" ondrop="drop(event)" ondragover="allowDrop(event)">
                        <div class="color-td add-new js-new-event">
                          <div class="title ">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="valign--m popOverEvent wednesday" data-day="wednesday" data-wday="2">
                      <div class="cell" ondrop="drop(event)" ondragover="allowDrop(event)">
                        <div class="color-td add-new js-new-event">
                          <div class="title ">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="valign--m popOverEvent thursday" data-day="thursday" data-wday="3">
                      <div class="cell" ondrop="drop(event)" ondragover="allowDrop(event)">
                        <div class="color-td add-new js-new-event">
                          <div class="title ">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="valign--m popOverEvent friday" data-day="friday" data-wday="4">
                      <div class="cell" ondrop="drop(event)" ondragover="allowDrop(event)">
                        <div class="color-td add-new js-new-event">
                          <div class="title ">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="valign--m popOverEvent saturday" data-day="saturday" data-wday="5">
                      <div class="cell" ondrop="drop(event)" ondragover="allowDrop(event)">
                        <div class="color-td add-new js-new-event">
                          <div class="title ">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="valign--m popOverEvent sunday" data-day="sunday" data-wday="6">
                      <div class="cell" ondrop="drop(event)" ondragover="allowDrop(event)">
                        <div class="color-td add-new js-new-event">
                          <div class="title ">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>

                  </tr>
                </tbody>
                <tbody class="open-shifts">
                  <tr class="main-row  empty-row">
                    <td>
                      <div class="display-flex" style="align-items: center;">
                        <div class="flex3">
                          <div class="text--medium text--navy text--s text--capitalize">
                            Open Shifts
                            <span class="js-open-shifts-counter"></span>
                          </div>
                          <div class="text--xs js-hours hours text--capitalize text--regular">0.00 Hrs</div>
                        </div>
                        <div class="flex1 text--right prm">
                          <a class="js-auto-schedule text--s paxs inline-block text--gray-dark" title="Auto Schedule"
                            data-toggle="modal" data-target="#upgradeModal">
                            <i class="fas fa-magic"></i>
                          </a>
                        </div>
                      </div>
                    </td>
                    <td class="popOver monday" data-day="monday" data-wday="0">
                      <div
                        class="schedule-event text--pink-medium bg--pink-pale text--center pvxs text--bold maxxxs cursor--pointer position--relative">
                        <span>
                          Taxation &amp; Custom Duties
                        </span>
                        <div class="fa fa-trash hover-action hover-action--secondary js-delete mrxxs text--gray-xdark">
                        </div>
                        <div class="fa fa-plus hover-action hover-action--primary js-add-new text--gray-xdark"></div>
                      </div>
                      <div class="cell" ondrop="drop(event)" ondragover="allowDrop(event)">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="popOver tuesday" data-day="tuesday" data-wday="1">
                      <div class="cell" ondrop="drop(event)" ondragover="allowDrop(event)">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="popOver wednesday" data-day="wednesday" data-wday="2">
                      <div class="cell" ondrop="drop(event)" ondragover="allowDrop(event)">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="popOver thursday" data-day="thursday" data-wday="3">
                      <div class="cell" ondrop="drop(event)" ondragover="allowDrop(event)">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="popOver friday" data-day="friday" data-wday="4">
                      <div class="cell" ondrop="drop(event)" ondragover="allowDrop(event)">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="popOver saturday" data-day="saturday" data-wday="5">
                      <div class="cell" ondrop="drop(event)" ondragover="allowDrop(event)">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="popOver sunday" data-day="sunday" data-wday="6">
                      <div class="cell" ondrop="drop(event)" ondragover="allowDrop(event)">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
                <tbody class="user-body" data-id="11519462" style="display: table-row-group;">
                  <tr class="main-row  empty-row">
                    <td class="control-cell" rowspan="1">
                      <div class="user-block" data-id="11519462">
                        <div class="display-flex space-between">
                          <div class="drag-on">
                            <i
                              class="fa fa-ellipsis-v js-drag-and-drop-icon drag-and-drop-icon text--gray-medium-dark cursor--all-scroll"></i>
                            <div class="mlxxxs inline-block full-width valign--m">
                              <a class="avatar micro" href="/team/11347909/employee_information" target="_blank">
                                <img src="/admin/assets/img/kb_medium.png">
                                <div class="opacity-border"></div>
                              </a>
                              <div class="user-info">
                                <div class="display-flex">
                                  <a class="name" href="/team/11347909/employee_information" target="_blank">
                                    ahsan a.
                                  </a>
                                </div>
                                <a class="counters" target="_blank" href="#">
                                  <span class="hours">
                                    <span class="counter">24.00</span>
                                    hrs
                                  </span>
                                  <span class="hour-wage-separator">
                                    /
                                  </span>
                                  <span>
                                    <span class="counter">$0.00</span>
                                  </span>
                                  <div class="company-hours" style="display: none;">
                                    <span class="company-counter">
                                      <span class="counter">
                                        0
                                      </span>
                                      hrs (All Locations)
                                    </span>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="user-icons">
                            <i class="inline-block fa js-tooltip cursor--pointer fa-eye not-viewed"
                              data-original-title="Schedule Not Viewed" data-toggle="tooltip" data-html="true"></i>
                            <div
                              class="js-tooltip js-six-days-alert inline-block fa fa-exclamation-triangle text--red hidden"
                              data-original-title="This person is scheduled for 6 or more days in a row"
                              data-toggle="tooltip"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="monday unpublished" data-day="monday" data-wday="0">
                      <div class="cell example-dropzone" ondragover="onDragOver(event);" ondrop="onDrop(event);">
                        <div class="shift-block js-shift" id="draggable-1" draggable="true"
                          ondragstart="onDragStart(event);">
                          <div class="period red">
                            <section class="data">
                              <div class="time">9am - 5pm</div>
                            </section>
                            <div class="fa fa-trash hover-action hover-action--secondary js-delete mrxxs"></div>
                            <div class="fa fa-plus hover-action hover-action--primary js-add-new"></div>
                            <div class="js-click-target" data-tab="notes"></div>
                            <div class="js-click-target" data-tab="approvals"></div>
                          </div>
                        </div>
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title  popOver">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="popOver thursday unpublished" data-day="thursday" data-wday="3">
                      <div class="cell example-dropzone" ondragover="onDragOver(event);" ondragover="onDragOver(event);"
                        ondrop="onDrop(event);">

                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="popOver thursday unpublished" data-day="thursday" data-wday="3">
                      <div class="cell example-dropzone" ondragover="onDragOver(event);" ondrop="onDrop(event);">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="popOver thursday unpublished" data-day="thursday" data-wday="3">
                      <div class="cell example-dropzone" ondragover="onDragOver(event);" ondragover="onDragOver(event);"
                        ondrop="onDrop(event);">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="popOver thursday unpublished" data-day="thursday" data-wday="3">
                      <div class="cell example-dropzone" ondragover="onDragOver(event);" ondragover="onDragOver(event);"
                        ondrop="onDrop(event);">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="popOver thursday unpublished" data-day="thursday" data-wday="3">
                      <div class="cell example-dropzone" ondragover="onDragOver(event);" ondragover="onDragOver(event);"
                        ondrop="onDrop(event);">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="popOver thursday unpublished" data-day="thursday" data-wday="3">
                      <div class="cell example-dropzone" ondragover="onDragOver(event);" ondragover="onDragOver(event);"
                        ondrop="onDrop(event);">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
                <tbody class="user-body" data-id="11456263" style="display: table-row-group;">
                  <tr class="main-row empty-row">
                    <td class="control-cell" rowspan="1">
                      <div class="user-block" data-id="11456263">
                        <div class="display-flex space-between">
                          <div class="drag-on">
                            <i
                              class="fa fa-ellipsis-v js-drag-and-drop-icon drag-and-drop-icon text--gray-medium-dark cursor--all-scroll"></i>
                            <div class="mlxxxs inline-block full-width valign--m">
                              <a class="avatar micro" href="#" target="_blank">
                                <img src="/admin/assets/img/kb_medium.png">
                                <div class="opacity-border"></div>
                              </a>
                              <div class="user-info">
                                <div class="display-flex">
                                  <a class="name" href="#" target="_blank">
                                    kevin b.
                                  </a>
                                </div>
                                <a class="counters" target="_blank" href="#">
                                  <span class="hours">
                                    <span class="counter">0.00</span>
                                    hrs
                                  </span>
                                  <span class="hour-wage-separator">
                                    /
                                  </span>
                                  <span>
                                    <span class="counter">$0.00</span>
                                  </span>
                                  <div class="company-hours" style="display: none;">
                                    <span class="company-counter">
                                      <span class="counter">
                                        0
                                      </span>
                                      hrs (All Locations)
                                    </span>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="user-icons">
                            <i class="inline-block fa js-tooltip cursor--pointer fa-eye not-viewed"
                              data-original-title="Schedule Not Viewed" data-toggle="tooltip" data-html="true"></i>
                            <div
                              class="js-tooltip js-six-days-alert inline-block fa fa-exclamation-triangle text--red hidden"
                              data-original-title="This person is scheduled for 6 or more days in a row"
                              data-toggle="tooltip"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="popOver thursday unpublished" data-day="thursday" data-wday="3">
                      <div class="cell example-dropzone" ondragover="onDragOver(event);" ondragover="onDragOver(event);"
                        ondrop="onDrop(event);">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="popOver thursday unpublished" data-day="thursday" data-wday="3">
                      <div class="cell example-dropzone" ondragover="onDragOver(event);" ondrop="onDrop(event);">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="popOver thursday unpublished" data-day="thursday" data-wday="3">
                      <div class="cell example-dropzone" ondragover="onDragOver(event);" ondragover="onDragOver(event);"
                        ondrop="onDrop(event);">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="popOver thursday unpublished" data-day="thursday" data-wday="3">
                      <div class="cell example-dropzone" ondragover="onDragOver(event);" ondragover="onDragOver(event);"
                        ondrop="onDrop(event);">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="popOver thursday unpublished" data-day="thursday" data-wday="3">
                      <div class="cell example-dropzone" ondragover="onDragOver(event);" ondragover="onDragOver(event);"
                        ondrop="onDrop(event);">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="popOver thursday unpublished" data-day="thursday" data-wday="3">
                      <div class="cell example-dropzone" ondragover="onDragOver(event);" ondragover="onDragOver(event);"
                        ondrop="onDrop(event);">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="popOver thursday unpublished" data-day="thursday" data-wday="3">
                      <div class="cell example-dropzone" ondragover="onDragOver(event);" ondragover="onDragOver(event);"
                        ondrop="onDrop(event);">
                        <div class="color-td empty-block add-new new-shift js-add-new-shift">
                          <div class="title">
                            add +
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="calendar__container table-responsive monthly phs pbs" style="display:none">
              <table class="calendar ">
                <thead>
                  <tr>
                    <th>
                      Mon
                    </th>
                    <th>
                      Tue
                    </th>
                    <th>
                      Wed
                    </th>
                    <th>
                      Thu
                    </th>
                    <th>
                      Fri
                    </th>
                    <th>
                      Sat
                    </th>
                    <th>
                      Sun
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="calendar__day">
                      <p class="text--gray-dark mbxxxs float-l">1</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts"></div>
                    </td>
                    <td class="calendar__day">
                      <p class="text--gray-dark mbxxxs float-l">2</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts"></div>
                    </td>
                    <td class="calendar__day">
                      <p class="text--gray-dark mbxxxs float-l">3</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts"></div>
                    </td>
                    <td class="calendar__day">
                      <p class="text--gray-dark mbxxxs float-l">4</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts"></div>
                    </td>
                    <td class="calendar__day">
                      <p class="text--gray-dark mbxxxs float-l">5</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts"></div>
                    </td>
                    <td class="calendar__day">
                      <p class="text--gray-dark mbxxxs float-l">6</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>

                      <div class="js-shifts"></div>
                    </td>
                    <td class="calendar__day">
                      <p class="text--gray-dark mbxxxs float-l">7</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts"></div>
                    </td>
                  </tr>
                  <tr>
                    <td class="calendar__day" ondragover="onDragOver(event);" ondragover="onDragOver(event);"
                    ondrop="onDrop(event);">
                      <p class="text--gray-dark mbxxxs float-l">8</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts" id="draggable-1" draggable="true"
                      ondragstart="onDragStart(event);">
                        <div class="js-shift calendar__day-item red calendar__day-item--job-shift unpublished"
                          data-id="549693934" draggable="true"><span class="text--bold">9a - 5p</span>
                          <span>ahsan a.</span>
                          <div class="label-role">
                            (Bartender)
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="calendar__day" ondragover="onDragOver(event);" ondragover="onDragOver(event);"
                    ondrop="onDrop(event);">
                      <p class="text--gray-dark mbxxxs float-l">9</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts" id="draggable-1" draggable="true"
                      ondragstart="onDragStart(event);">
                        <div class="js-shift calendar__day-item red calendar__day-item--job-shift unpublished"
                          data-id="549685822"><span class="text--bold">9a - 5p</span>
                          <span>ahsan a.</span>
                          <div class="label-role">
                            (Bartender)
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="calendar__day" ondragover="onDragOver(event);" ondragover="onDragOver(event);"
                    ondrop="onDrop(event);">
                      <p class="text--gray-dark mbxxxs float-l">10</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts" id="draggable-1" draggable="true"
                      ondragstart="onDragStart(event);">
                        <div class="js-shift calendar__day-item red calendar__day-item--job-shift unpublished"
                          data-id="549685820" draggable="true"><span class="text--bold">9a - 5p</span>
                          <span>ahsan a.</span>
                          <div class="label-role">
                            (Bartender)
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="calendar__day" ondragover="onDragOver(event);" ondragover="onDragOver(event);"
                    ondrop="onDrop(event);">
                      <p class="text--gray-dark mbxxxs float-l">11</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts"></div>
                    </td>
                    <td class="calendar__day" ondragover="onDragOver(event);" ondragover="onDragOver(event);"
                        ondrop="onDrop(event);">
                      <p class="text--gray-dark mbxxxs float-l">12</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts"></div>
                    </td>
                    <td class="calendar__day">
                      <p class="text--gray-dark mbxxxs float-l">13</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts"></div>
                    </td>
                    <td class="calendar__day">
                      <p class="text--gray-dark mbxxxs float-l">14</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts"></div>
                    </td>
                  </tr>
                  <tr>
                    <td class="calendar__day">
                      <p class="text--gray-dark mbxxxs float-l">15</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts"></div>
                    </td>
                    <td class="calendar__day" data-target="webuiPopover0">
                      <p class="text--gray-dark mbxxxs float-l">16</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts"></div>
                    </td>
                    <td class="calendar__day">
                      <p class="text--gray-dark mbxxxs float-l">17</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts"></div>
                    </td>
                    <td class="calendar__day">
                      <p class="text--gray-dark mbxxxs float-l">18</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts"></div>
                    </td>
                    <td class="calendar__day">
                      <p class="text--gray-dark mbxxxs float-l">19</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts"></div>
                    </td>
                    <td class="calendar__day">
                      <p class="text--gray-dark mbxxxs float-l">20</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts"></div>
                    </td>
                    <td class="calendar__day">
                      <p class="text--gray-dark mbxxxs float-l">21</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts"></div>
                    </td>
                  </tr>
                  <tr>
                    <td class="calendar__day">
                      <p class="text--gray-dark mbxxxs float-l">22</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts"></div>
                    </td>
                    <td class="calendar__day">
                      <p class="text--gray-dark mbxxxs float-l">23</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts"></div>
                    </td>
                    <td class="calendar__day">
                      <p class="text--gray-dark mbxxxs float-l">24</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts"></div>
                    </td>
                    <td class="calendar__day">
                      <p class="text--gray-dark mbxxxs float-l">25</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts"></div>
                    </td>
                    <td class="calendar__day">
                      <p class="text--gray-dark mbxxxs float-l">26</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts"></div>
                    </td>
                    <td class="calendar__day">
                      <p class="text--gray-dark mbxxxs float-l">27</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>

                    </td>
                    <td class="calendar__day">
                      <p class="text--gray-dark mbxxxs float-l">28</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts"></div>
                    </td>
                  </tr>
                  <tr>
                    <td class="calendar__day">
                      <p class="text--gray-dark mbxxxs float-l">22</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts"></div>
                    </td>
                    <td class="calendar__day">
                      <p class="text--gray-dark mbxxxs float-l">23</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts"></div>
                    </td>
                    <td class="calendar__day">
                      <p class="text--gray-dark mbxxxs float-l">24</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts"></div>
                    </td>
                    <td class="calendar__day">
                      <p class="text--gray-dark mbxxxs float-l">25</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts"></div>
                    </td>
                    <td class="calendar__day">
                      <p class="text--gray-dark mbxxxs float-l">26</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts"></div>
                    </td>
                    <td class="calendar__day">
                      <p class="text--gray-dark mbxxxs float-l">27</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>

                    </td>
                    <td class="calendar__day">
                      <p class="text--gray-dark mbxxxs float-l">28</p>
                      <a class="js-create-shift text--gray-dark float-r no-print">+</a>
                      <div class="js-shifts"></div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="js-add-employees add-employees-link mbxxl">
            + Add Employees
          </div>
          <div class="day-notes-print"></div>
          <div class="js-bottom-info bottom-info">
            <div class="additional-info bottom-bar--closed">
              <div class="bottom-bar__nav text--right prxxs ptxxxs" style="display: none;">
                <div class="bottom-bar__relative-block">
                  <div class="bottom-bar__rows-buttons inline-block border-r prxxxs text--m">

                    <a class="inline-block js-tooltip paxs text--gray-dark active" id="sales_data" title="Sales">
                      <i class="fas fa-dollar-sign">

                      </i>
                    </a>
                    <a class="inline-block js-tooltip paxs text--gray-dark active" title="Target Labor" id="labor_data">
                      <i class="fas fa-percentage">

                      </i>
                    </a>
                    <a class="inline-block js-tooltip paxs text--gray-dark active" title="S&L by Dept" id="SL_data">
                      <i class="material-icons flip-horizontal">
                        vertical_split
                      </i>
                    </a>

                  </div>
                  <a class="schedule-builder__navigation inline-block paxs text--navy js-toggle-row heap--schedule-19"
                    data-key="budget_forecast">
                    <i class="fas fa-caret-down bottom-bar__toggle--down"></i>
                    <i class="fas fa-caret-up bottom-bar__toggle--up"></i>
                  </a>
                </div>
              </div>
              <table class="schedule-table schedule-table__budget-forecast js-budget-forecast-table">
                <tbody class="totals-row">
                  <tr class="tall js-totals-row">
                    <th>
                      <div class="display-flex flex-align">
                        <div class="flex1 text--xs text--navy text--left text--medium">
                          <div>
                            WAGES
                          </div>
                          <div class="hours">
                            HOURS
                          </div>
                        </div>
                        <div class="flex1 text--right prm">
                          <div class="js-summary-cost wages text-xs text--navy">$0.00</div>
                          <div class="js-summary-hours hours text-xs text--navy">8.00</div>
                          <div class="people-forecast right">
                            <i class="fas fa-user text--neutral300"></i>
                            <span class="js-summary-employees">1</span>
                          </div>
                        </div>
                      </div>
                    </th>
                    <th class="monday today">
                      <div class="display-flex text--gray-xdark text--xs">
                        <div class="display-flex text--left center-aligned-items">
                          <div class="people-forecast left">
                            <i class="fas fa-user text--neutral300"></i>
                            <span class="js-employees">0</span>
                          </div>
                        </div>
                        <div class="flex1 text--right">
                          <div class="js-cost wages">$0.00</div>
                          <div class="js-hours hours">0.00</div>
                          <div class="people-forecast right">
                            <i class="fas fa-user text--neutral300"></i>
                            <span class="js-summary-employees">1</span>
                          </div>
                        </div>
                      </div>
                    </th>
                    <th class="tuesday">
                      <div class="display-flex text--gray-xdark text--xs">
                        <div class="display-flex text--left center-aligned-items">
                          <div class="people-forecast left">
                            <i class="fas fa-user text--neutral300"></i>
                            <span class="js-employees">1</span>
                          </div>
                        </div>
                        <div class="flex1 text--right">
                          <div class="js-cost wages">$0.00</div>
                          <div class="js-hours hours">8.00</div>
                        </div>
                      </div>
                    </th>
                    <th class="wednesday">
                      <div class="display-flex text--gray-xdark text--xs">
                        <div class="display-flex text--left center-aligned-items">
                          <div class="people-forecast left">
                            <i class="fas fa-user text--neutral300"></i>
                            <span class="js-employees">0</span>
                          </div>
                        </div>
                        <div class="flex1 text--right">
                          <div class="js-cost wages">$0.00</div>
                          <div class="js-hours hours">0.00</div>
                          <div class="people-forecast right">
                            <i class="fas fa-user text--neutral300"></i>
                            <span class="js-summary-employees">1</span>
                          </div>
                        </div>
                      </div>
                    </th>
                    <th class="thursday">
                      <div class="display-flex text--gray-xdark text--xs">
                        <div class="display-flex text--left center-aligned-items">
                          <div class="people-forecast left">
                            <i class="fas fa-user text--neutral300"></i>
                            <span class="js-employees">0</span>
                          </div>
                        </div>
                        <div class="flex1 text--right">
                          <div class="js-cost wages">$0.00</div>
                          <div class="js-hours hours">0.00</div>
                          <div class="people-forecast right">
                            <i class="fas fa-user text--neutral300"></i>
                            <span class="js-summary-employees">1</span>
                          </div>
                        </div>
                      </div>
                    </th>
                    <th class="friday">
                      <div class="display-flex text--gray-xdark text--xs">
                        <div class="display-flex text--left center-aligned-items">
                          <div class="people-forecast left">
                            <i class="fas fa-user text--neutral300"></i>
                            <span class="js-employees">0</span>
                          </div>
                        </div>
                        <div class="flex1 text--right">
                          <div class="js-cost wages">$0.00</div>
                          <div class="js-hours hours">0.00</div>
                          <div class="people-forecast right">
                            <i class="fas fa-user text--neutral300"></i>
                            <span class="js-summary-employees">1</span>
                          </div>
                        </div>
                      </div>
                    </th>
                    <th class="saturday">
                      <div class="display-flex text--gray-xdark text--xs">
                        <div class="display-flex text--left center-aligned-items">
                          <div class="people-forecast left">
                            <i class="fas fa-user text--neutral300"></i>
                            <span class="js-employees">0</span>
                          </div>
                        </div>
                        <div class="flex1 text--right">
                          <div class="js-cost wages">$0.00</div>
                          <div class="js-hours hours">0.00</div>
                          <div class="people-forecast right">
                            <i class="fas fa-user text--neutral300"></i>
                            <span class="js-summary-employees">1</span>
                          </div>
                        </div>
                      </div>
                    </th>
                    <th class="sunday">
                      <div class="display-flex text--gray-xdark text--xs">
                        <div class="display-flex text--left center-aligned-items">
                          <div class="people-forecast left">
                            <i class="fas fa-user text--neutral300"></i>
                            <span class="js-employees">0</span>
                          </div>
                        </div>
                        <div class="flex1 text--right">
                          <div class="js-cost wages">$0.00</div>
                          <div class="js-hours hours">0.00</div>
                          <div class="people-forecast right">
                            <i class="fas fa-user text--neutral300"></i>
                            <span class="js-summary-employees">1</span>
                          </div>
                        </div>
                      </div>
                    </th>
                  </tr>
                </tbody>
                <tbody class="inner-rows-wrapper">
                  <tr class="tall bottom-bar__row js-estimated-sales-row">
                    <th class="editable">
                      <div class="display-flex center-aligned-items">
                        <div class="flex1 text--xxs text--navy text--left text--medium text--uppercase">
                          Estimated Sales
                        </div>
                        <div class="flex1 text--right prxs">
                          <div class="js-static text--center text--right prxxs">
                            $0
                          </div>
                        </div>
                      </div>
                    </th>
                    <th class="editable monday today" data-wday="0">
                      <input class="calendar-clone-input budget-forecast-input" type="text" value="$0">
                      <div class="js-static"></div>
                    </th>
                    <th class="editable tuesday" data-wday="1">
                      <input class="calendar-clone-input budget-forecast-input" type="text" value="$0">
                      <div class="js-static"></div>
                    </th>
                    <th class="editable wednesday" data-wday="2">
                      <input class="calendar-clone-input budget-forecast-input" type="text" value="$0">
                      <div class="js-static"></div>
                    </th>
                    <th class="editable thursday" data-wday="3">
                      <input class="calendar-clone-input budget-forecast-input" type="text" value="$0">
                      <div class="js-static"></div>
                    </th>
                    <th class="editable friday" data-wday="4">
                      <input class="calendar-clone-input budget-forecast-input" type="text" value="$0">
                      <div class="js-static"></div>
                    </th>
                    <th class="editable saturday" data-wday="5">
                      <input class="calendar-clone-input budget-forecast-input" type="text" value="$0">
                      <div class="js-static"></div>
                    </th>
                    <th class="editable sunday" data-wday="6">
                      <input class="calendar-clone-input budget-forecast-input" type="text" value="$0">
                      <div class="js-static"></div>
                    </th>
                  </tr>
                  <tr class="tall bottom-bar__row js-labor-target-row">
                    <th class="editable">
                      <div class="display-flex center-aligned-items">
                        <div class="flex3 text--xxs text--navy text--left text--medium text--uppercase">
                          <span class="text--medium text--xs">
                            LABOR %
                          </span>
                          <span class="text--gray-dark text--xxs text--initial">
                            (Target/Actual)
                          </span>
                        </div>
                        <div class="flex1 text--right prxs">
                          <input
                            class="calendar-clone-input budget-forecast-input budget-forecast-input--small text--center"
                            data-weekly="" type="text" value="0%">
                        </div>
                        <div class="flex1">
                          <div class="js-value text--medium text--right text--s prs text--red">N/A</div>
                        </div>
                      </div>
                    </th>
                    <th class="editable monday today" data-wday="0">
                      <div class="text--right">
                        <input
                          class="calendar-clone-input budget-forecast-input budget-forecast-input--small text--gray-xdark text--center"
                          type="text" value="0%">
                        <span
                          class="js-value text--medium text--right text--s prs text--gray-xdark mls valign--m text--red">N/A</span>
                      </div>
                    </th>
                    <th class="editable tuesday" data-wday="1">
                      <div class="text--right">
                        <input
                          class="calendar-clone-input budget-forecast-input budget-forecast-input--small text--gray-xdark text--center"
                          type="text" value="0%">
                        <span
                          class="js-value text--medium text--right text--s prs text--gray-xdark mls valign--m text--red">N/A</span>
                      </div>
                    </th>
                    <th class="editable wednesday" data-wday="2">
                      <div class="text--right">
                        <input
                          class="calendar-clone-input budget-forecast-input budget-forecast-input--small text--gray-xdark text--center"
                          type="text" value="0%">
                        <span
                          class="js-value text--medium text--right text--s prs text--gray-xdark mls valign--m text--red">N/A</span>
                      </div>
                    </th>
                    <th class="editable thursday" data-wday="3">
                      <div class="text--right">
                        <input
                          class="calendar-clone-input budget-forecast-input budget-forecast-input--small text--gray-xdark text--center"
                          type="text" value="0%">
                        <span
                          class="js-value text--medium text--right text--s prs text--gray-xdark mls valign--m text--red">N/A</span>
                      </div>
                    </th>
                    <th class="editable friday" data-wday="4">
                      <div class="text--right">
                        <input
                          class="calendar-clone-input budget-forecast-input budget-forecast-input--small text--gray-xdark text--center"
                          type="text" value="0%">
                        <span
                          class="js-value text--medium text--right text--s prs text--gray-xdark mls valign--m text--red">N/A</span>
                      </div>
                    </th>
                    <th class="editable saturday" data-wday="5">
                      <div class="text--right">
                        <input
                          class="calendar-clone-input budget-forecast-input budget-forecast-input--small text--gray-xdark text--center"
                          type="text" value="0%">
                        <span
                          class="js-value text--medium text--right text--s prs text--gray-xdark mls valign--m text--red">N/A</span>
                      </div>
                    </th>
                    <th class="editable sunday" data-wday="6">
                      <div class="text--right">
                        <input
                          class="calendar-clone-input budget-forecast-input budget-forecast-input--small text--gray-xdark text--center"
                          type="text" value="0%">
                        <span
                          class="js-value text--medium text--right text--s prs text--gray-xdark mls valign--m text--red">N/A</span>
                      </div>
                    </th>

                  <tr
                    class="tall bottom-bar__row js-departments-row without-borders js-departments-row-body bottom-bar__row--departments">
                    <th>
                      <div class="display-flex prxxs">
                        <div class="flex1 text--xxs text--navy text--left text--regular">
                          Back of House
                        </div>
                        <div class="flex1 text--xxs text--right text--medium text--gray-xdark">
                          <span class="js-hours">0 h</span>
                          |
                          <span class="js-costs">$0</span>
                          |
                          <span class="js-percent">0%</span>
                        </div>
                      </div>
                    </th>
                    <th class="text--gray-xdark text--regular text--xxs monday today">
                      <div class="mvxxs text--gray-xdark text--lowercase text--right">
                        <span class="js-hours">0 h</span>
                        |
                        <span class="js-costs">$0</span>
                        |
                        <span class="js-percent">0%</span>
                      </div>
                    </th>
                    <th class="text--gray-xdark text--regular text--xxs tuesday">
                      <div class="mvxxs text--gray-xdark text--lowercase text--right">
                        <span class="js-hours">0 h</span>
                        |
                        <span class="js-costs">$0</span>
                        |
                        <span class="js-percent">0%</span>
                      </div>
                    </th>
                    <th class="text--gray-xdark text--regular text--xxs wednesday">
                      <div class="mvxxs text--gray-xdark text--lowercase text--right">
                        <span class="js-hours">0 h</span>
                        |
                        <span class="js-costs">$0</span>
                        |
                        <span class="js-percent">0%</span>
                      </div>
                    </th>
                    <th class="text--gray-xdark text--regular text--xxs thursday">
                      <div class="mvxxs text--gray-xdark text--lowercase text--right">
                        <span class="js-hours">0 h</span>
                        |
                        <span class="js-costs">$0</span>
                        |
                        <span class="js-percent">0%</span>
                      </div>
                    </th>
                    <th class="text--gray-xdark text--regular text--xxs friday">
                      <div class="mvxxs text--gray-xdark text--lowercase text--right">
                        <span class="js-hours">0 h</span>
                        |
                        <span class="js-costs">$0</span>
                        |
                        <span class="js-percent">0%</span>
                      </div>
                    </th>
                    <th class="text--gray-xdark text--regular text--xxs saturday">
                      <div class="mvxxs text--gray-xdark text--lowercase text--right">
                        <span class="js-hours">0 h</span>
                        |
                        <span class="js-costs">$0</span>
                        |
                        <span class="js-percent">0%</span>
                      </div>
                    </th>
                    <th class="text--gray-xdark text--regular text--xxs sunday">
                      <div class="mvxxs text--gray-xdark text--lowercase text--right">
                        <span class="js-hours">0 h</span>
                        |
                        <span class="js-costs">$0</span>
                        |
                        <span class="js-percent">0%</span>
                      </div>
                    </th>
                  </tr>
                  <tr
                    class="tall bottom-bar__row js-departments-row without-borders js-departments-row-body bottom-bar__row--departments">
                    <th>
                      <div class="display-flex prxxs">
                        <div class="flex1 text--xxs text--navy text--left text--regular">
                          Front of House
                        </div>
                        <div class="flex1 text--xxs text--right text--medium text--gray-xdark">
                          <span class="js-hours">8 h</span>
                          |
                          <span class="js-costs">$0</span>
                          |
                          <span class="js-percent">100%</span>
                        </div>
                      </div>
                    </th>
                    <th class="text--gray-xdark text--regular text--xxs monday today">
                      <div class="mvxxs text--gray-xdark text--lowercase text--right">
                        <span class="js-hours">0 h</span>
                        |
                        <span class="js-costs">$0</span>
                        |
                        <span class="js-percent">0%</span>
                      </div>
                    </th>
                    <th class="text--gray-xdark text--regular text--xxs tuesday">
                      <div class="mvxxs text--gray-xdark text--lowercase text--right">
                        <span class="js-hours">8 h</span>
                        |
                        <span class="js-costs">$0</span>
                        |
                        <span class="js-percent">100%</span>
                      </div>
                    </th>
                    <th class="text--gray-xdark text--regular text--xxs wednesday">
                      <div class="mvxxs text--gray-xdark text--lowercase text--right">
                        <span class="js-hours">0 h</span>
                        |
                        <span class="js-costs">$0</span>
                        |
                        <span class="js-percent">0%</span>
                      </div>
                    </th>
                    <th class="text--gray-xdark text--regular text--xxs thursday">
                      <div class="mvxxs text--gray-xdark text--lowercase text--right">
                        <span class="js-hours">0 h</span>
                        |
                        <span class="js-costs">$0</span>
                        |
                        <span class="js-percent">0%</span>
                      </div>
                    </th>
                    <th class="text--gray-xdark text--regular text--xxs friday">
                      <div class="mvxxs text--gray-xdark text--lowercase text--right">
                        <span class="js-hours">0 h</span>
                        |
                        <span class="js-costs">$0</span>
                        |
                        <span class="js-percent">0%</span>
                      </div>
                    </th>
                    <th class="text--gray-xdark text--regular text--xxs saturday">
                      <div class="mvxxs text--gray-xdark text--lowercase text--right">
                        <span class="js-hours">0 h</span>
                        |
                        <span class="js-costs">$0</span>
                        |
                        <span class="js-percent">0%</span>
                      </div>
                    </th>
                    <th class="text--gray-xdark text--regular text--xxs sunday">
                      <div class="mvxxs text--gray-xdark text--lowercase text--right">
                        <span class="js-hours">0 h</span>
                        |
                        <span class="js-costs">$0</span>
                        |
                        <span class="js-percent">0%</span>
                      </div>
                    </th>
                  </tr>
                  <tr
                    class="tall bottom-bar__row js-departments-row without-borders js-departments-row-body bottom-bar__row--departments">
                    <th>
                      <div class="display-flex prxxs">
                        <div class="flex1 text--xxs text--navy text--left text--regular">
                          test departement
                        </div>
                        <div class="flex1 text--xxs text--right text--medium text--gray-xdark">
                          <span class="js-hours">0 h</span>
                          |
                          <span class="js-costs">$0</span>
                          |
                          <span class="js-percent">0%</span>
                        </div>
                      </div>
                    </th>
                    <th class="text--gray-xdark text--regular text--xxs monday today">
                      <div class="mvxxs text--gray-xdark text--lowercase text--right">
                        <span class="js-hours">0 h</span>
                        |
                        <span class="js-costs">$0</span>
                        |
                        <span class="js-percent">0%</span>
                      </div>
                    </th>
                    <th class="text--gray-xdark text--regular text--xxs tuesday">
                      <div class="mvxxs text--gray-xdark text--lowercase text--right">
                        <span class="js-hours">0 h</span>
                        |
                        <span class="js-costs">$0</span>
                        |
                        <span class="js-percent">0%</span>
                      </div>
                    </th>
                    <th class="text--gray-xdark text--regular text--xxs wednesday">
                      <div class="mvxxs text--gray-xdark text--lowercase text--right">
                        <span class="js-hours">0 h</span>
                        |
                        <span class="js-costs">$0</span>
                        |
                        <span class="js-percent">0%</span>
                      </div>
                    </th>
                    <th class="text--gray-xdark text--regular text--xxs thursday">
                      <div class="mvxxs text--gray-xdark text--lowercase text--right">
                        <span class="js-hours">0 h</span>
                        |
                        <span class="js-costs">$0</span>
                        |
                        <span class="js-percent">0%</span>
                      </div>
                    </th>
                    <th class="text--gray-xdark text--regular text--xxs friday">
                      <div class="mvxxs text--gray-xdark text--lowercase text--right">
                        <span class="js-hours">0 h</span>
                        |
                        <span class="js-costs">$0</span>
                        |
                        <span class="js-percent">0%</span>
                      </div>
                    </th>
                    <th class="text--gray-xdark text--regular text--xxs saturday">
                      <div class="mvxxs text--gray-xdark text--lowercase text--right">
                        <span class="js-hours">0 h</span>
                        |
                        <span class="js-costs">$0</span>
                        |
                        <span class="js-percent">0%</span>
                      </div>
                    </th>
                    <th class="text--gray-xdark text--regular text--xxs sunday">
                      <div class="mvxxs text--gray-xdark text--lowercase text--right">
                        <span class="js-hours">0 h</span>
                        |
                        <span class="js-costs">$0</span>
                        |
                        <span class="js-percent">0%</span>
                      </div>
                    </th>
                  </tr>
                  <tr
                    class="tall bottom-bar__row js-departments-row without-borders js-departments-row-body bottom-bar__row--departments">
                    <th>
                      <div class="display-flex prxxs">
                        <div class="flex1 text--xxs text--navy text--left text--regular">
                          Dept. Not Set
                        </div>
                        <div class="flex1 text--xxs text--right text--medium text--gray-xdark">
                          <span class="js-hours">0 h</span>
                          |
                          <span class="js-costs">$0</span>
                          |
                          <span class="js-percent">0%</span>
                        </div>
                      </div>
                    </th>
                    <th class="text--gray-xdark text--regular text--xxs monday today">
                      <div class="mvxxs text--gray-xdark text--lowercase text--right">
                        <span class="js-hours">0 h</span>
                        |
                        <span class="js-costs">$0</span>
                        |
                        <span class="js-percent">0%</span>
                      </div>
                    </th>
                    <th class="text--gray-xdark text--regular text--xxs tuesday">
                      <div class="mvxxs text--gray-xdark text--lowercase text--right">
                        <span class="js-hours">0 h</span>
                        |
                        <span class="js-costs">$0</span>
                        |
                        <span class="js-percent">0%</span>
                      </div>
                    </th>
                    <th class="text--gray-xdark text--regular text--xxs wednesday">
                      <div class="mvxxs text--gray-xdark text--lowercase text--right">
                        <span class="js-hours">0 h</span>
                        |
                        <span class="js-costs">$0</span>
                        |
                        <span class="js-percent">0%</span>
                      </div>
                    </th>
                    <th class="text--gray-xdark text--regular text--xxs thursday">
                      <div class="mvxxs text--gray-xdark text--lowercase text--right">
                        <span class="js-hours">0 h</span>
                        |
                        <span class="js-costs">$0</span>
                        |
                        <span class="js-percent">0%</span>
                      </div>
                    </th>
                    <th class="text--gray-xdark text--regular text--xxs friday">
                      <div class="mvxxs text--gray-xdark text--lowercase text--right">
                        <span class="js-hours">0 h</span>
                        |
                        <span class="js-costs">$0</span>
                        |
                        <span class="js-percent">0%</span>
                      </div>
                    </th>
                    <th class="text--gray-xdark text--regular text--xxs saturday">
                      <div class="mvxxs text--gray-xdark text--lowercase text--right">
                        <span class="js-hours">0 h</span>
                        |
                        <span class="js-costs">$0</span>
                        |
                        <span class="js-percent">0%</span>
                      </div>
                    </th>
                    <th class="text--gray-xdark text--regular text--xxs sunday">
                      <div class="mvxxs text--gray-xdark text--lowercase text--right">
                        <span class="js-hours">0 h</span>
                        |
                        <span class="js-costs">$0</span>
                        |
                        <span class="js-percent">0%</span>
                      </div>
                    </th>
                  </tr>
                </tbody>

              </table>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>

  <div class="MuiPaper-root add-employee-sidebar">
    <div class="Box" style="width: 546px; height: 100%;">
      <div class="Box Box--absolute" style="top: 5px; right: 5px; z-index: 2;position: absolute;"><button
          class="Button Button--theme-link IconButton IconButton--mdClose" type="button"><span
            class="Button__content Button__content--show"><svg fill="currentColor" preserveAspectRatio="xMidYMid meet"
              height="20px" width="20px" viewBox="0 0 40 40" class="Icon Icon--mdClose IconButton__icon"
              style="vertical-align: middle; color: rgb(150, 155, 160); width: 20px; height: 20px;">
              <g>
                <path
                  d="m31.6 10.7l-9.3 9.3 9.3 9.3-2.3 2.3-9.3-9.3-9.3 9.3-2.3-2.3 9.3-9.3-9.3-9.3 2.3-2.3 9.3 9.3 9.3-9.3z">
                </path>
              </g>
            </svg></span>
          <div class="Box LoadingIndicator LoadingIndicator--three-dots Button__loading-indicator">
            <div class="LoadingIndicator__child"></div>
          </div>
        </button></div>
      <div class="Box Box--relative Box--borderbox" style="height: 100%; padding: 32px;">
        <div class="Box Box--row" style="margin-bottom: 24px;">
          <div class="Box Box--pointer Box--align-items-center" style="margin-right: 8px;"><svg fill="currentColor"
              preserveAspectRatio="xMidYMid meet" height="16" width="16" viewBox="0 0 40 40"
              class="Icon Icon--chevronLeft"
              style="vertical-align: middle; color: rgb(4, 162, 189); width: 16px; height: 16px;">
              <g>
                <path
                  d="m31.1 6.7l-11.8 11.9 11.8 11.8q0.5 0.4 0.5 1t-0.5 1l-3.7 3.7q-0.4 0.5-1 0.5t-1-0.5l-16.5-16.5q-0.5-0.4-0.5-1t0.5-1l16.5-16.6q0.5-0.4 1-0.4t1 0.4l3.7 3.7q0.5 0.4 0.5 1t-0.5 1z">
                </path>
              </g>
            </svg></div>
          <div class="Box Box--align-items-center"><span class="Text Text--fw600 Text--fs24 Text--"
              style="line-height: 1.1;">Add an Employee</span></div>
        </div>
        <div class="Box Box--row" style="margin-bottom: 24px;">
          <div class="Box" style="width: 235px; margin-right: 12px;">
            <div class="Box" style="margin-bottom: 8px;"><span class="Text Text--fw600 Text--fs14 Text--"
                style="line-height: 1.1;">First Name</span>*</div>
            <div class="Box">
              <div class="MuiFormControl-root MuiTextField-root TextField TextField--bordered MuiFormControl-fullWidth"
                style="height: 40px;">
                <div
                  class="MuiInputBase-root MuiInput-root MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl">
                  <input aria-invalid="false" name="firstName" type="text" class="MuiInputBase-input MuiInput-input"
                    value="" style="color: rgb(49, 58, 67); font-size: 16px; height: 40px;">
                </div>
              </div>
            </div>
          </div>
          <div class="Box" style="width: 235px;">
            <div class="Box" style="margin-bottom: 8px;"><span class="Text Text--fw600 Text--fs14 Text--"
                style="line-height: 1.1;">Last Name</span></div>
            <input aria-invalid="false" name="lastname" placeholder="" type="text"
              class="MuiInputBase-input MuiInput-input" value=""
              style="color: rgb(49, 58, 67); font-size: 16px; height: 40px;">
          </div>
        </div>
        <div class="Box" style="margin-bottom: 24px;">
          <div class="Box" style="margin-bottom: 8px;"><span class="Text Text--fw600 Text--fs14 Text--"
              style="line-height: 1.1;">Contact Information</span></div>
          <div class="Box Box--row">
            <div class="Box" style="width: 235px; margin-right: 12px;">
              <div class="MuiFormControl-root MuiTextField-root TextField TextField--bordered MuiFormControl-fullWidth"
                style="height: 40px;">
                <div
                  class="MuiInputBase-root MuiInput-root MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl">

                  <input aria-invalid="false" name="phone" placeholder="Mobile Phone" type="text"
                    class="MuiInputBase-input MuiInput-input" value=""
                    style="color: rgb(49, 58, 67); font-size: 16px; height: 40px;">
                </div>
              </div>
            </div>
            <div class="Box" style="width: 235px;">
              <div class="MuiFormControl-root MuiTextField-root TextField TextField--bordered MuiFormControl-fullWidth"
                style="height: 40px;">
                <div
                  class="MuiInputBase-root MuiInput-root MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl">
                  <input aria-invalid="false" name="email" placeholder="Email Address" type="text"
                    class="MuiInputBase-input MuiInput-input" value=""
                    style="color: rgb(49, 58, 67); font-size: 16px; height: 40px;">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="Box" style="margin-bottom: 24px;"><label class="MuiFormControlLabel-root CheckboxInput"
            style="font-size: 14px; color: rgb(49, 58, 67);"><span aria-disabled="false"
              style="margin-right: 4px;"><span class="MuiIconButton-label"><input class="jss94" name="sendSms"
                  type="checkbox" data-indeterminate="false" value="" checked=""></span><span
                class="MuiTouchRipple-root"></span></span><span
              class="MuiTypography-root MuiFormControlLabel-label MuiTypography-body1"><span class="Box"><span
                  class="Text Text--fs14 Text--" style="line-height: 1.1;">Send employee a link to the free app
                  (Recommended)</span></span></span></label></div>
        <div class="Box" style="margin-bottom: 24px;">
          <div class="Box Box--row" style="margin-bottom: 8px;">
            <div class="Box Box--align-items-end"><span class="Text Text--fw600 Text--fs14 Text--"
                style="line-height: 1.1;">Access Level</span></div>
            <div class="Box Box--align-items-end">
              <div class="Box inline"><svg fill="currentColor" preserveAspectRatio="xMidYMid meet" height="10"
                  width="10" viewBox="0 0 40 40" class="Icon Icon--infoCircle"
                  style="vertical-align: middle; color: rgb(150, 155, 160); width: 10px; height: 10px;">
                  <g>
                    <path
                      d="m25.9 30.7v-3.6q0-0.3-0.2-0.5t-0.6-0.2h-2.1v-11.4q0-0.3-0.2-0.5t-0.5-0.2h-7.2q-0.3 0-0.5 0.2t-0.2 0.5v3.6q0 0.3 0.2 0.5t0.5 0.2h2.2v7.1h-2.2q-0.3 0-0.5 0.2t-0.2 0.5v3.6q0 0.3 0.2 0.5t0.5 0.2h10q0.4 0 0.6-0.2t0.2-0.5z m-2.9-20v-3.6q0-0.3-0.2-0.5t-0.5-0.2h-4.3q-0.3 0-0.5 0.2t-0.2 0.5v3.6q0 0.3 0.2 0.5t0.5 0.2h4.3q0.3 0 0.5-0.2t0.2-0.5z m14.3 9.3q0 4.7-2.3 8.6t-6.3 6.2-8.6 2.3-8.6-2.3-6.2-6.2-2.3-8.6 2.3-8.6 6.2-6.2 8.6-2.3 8.6 2.3 6.3 6.2 2.3 8.6z">
                    </path>
                  </g>
                </svg></div>
            </div>
          </div>
          <div class="Box Box--row">
            <div class="Box Box--pointer AddIndividualDrawer__level"
              style="border: 1px solid rgb(229, 230, 231); border-radius: 4px; margin-right: 8px; padding: 6px 8px; background: rgb(243, 238, 246);">
              <span class="Text Text--fw600 Text--fs14 Text--violet-xdark Text--"
                style="line-height: 1.1;">Employee</span>
            </div>
            <div class="Box UpgradeWrapper">
              <div class="Box Box--pointer UpgradeWrapper__child AddIndividualDrawer__level"
                style="border: 1px solid rgb(229, 230, 231); border-radius: 4px; margin-right: 8px; padding: 6px 8px; background: rgb(255, 255, 255);">
                <span class="Text Text--fw600 Text--fs14 Text--violet-xdark Text--"
                  style="line-height: 1.1;">Manager</span>
              </div>
            </div>
            <div class="Box UpgradeWrapper">
              <div class="Box Box--pointer UpgradeWrapper__child AddIndividualDrawer__level"
                style="border: 1px solid rgb(229, 230, 231); border-radius: 4px; margin-right: 8px; padding: 6px 8px; background: rgb(255, 255, 255);">
                <span class="Text Text--fw600 Text--fs14 Text--violet-xdark Text--" style="line-height: 1.1;">General
                  Manager</span>
              </div>
            </div>
          </div>
        </div>
        <div class="Box" style="margin-bottom: 24px;">
          <div class="Box RolesBlock">
            <div class="Box Box--row RoleWageRow RoleWageRow--row0">

              <div class="Box Box--inlineBlock" style="margin-right: 12px;">
                <div class="Box" style="margin-bottom: 8px;"><span class="Text Text--fw600 Text--fs14 Text--"
                    style="line-height: 1.1;">Wage</span></div>
                <div class="Box Box--row Box--align-items-center">

                  <div class="Box" style="width: 112px;">
                    <div class="SelectInput RoleWageRow__wage_type">
                      <div class="Select Select--single has-value"><input type="hidden" name="wageType" value="0">
                        <div class="select-wrapper">
                          <div class="dropdown" style="    height: 100%;">
                            <button class="btn dropdown-toggle" type="button" style="height: 100%;"
                              id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              /hour
                            </button>
                            <div class="dropdown-menu custom-dropdown" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" id="daily" href="#">/hour</a>
                              <a class="dropdown-item" id="weekly" href="#">year</a>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="Box Box--row Box--borderbox" style="width: 100%; bottom: 0px; left: 0px;">
          <div class="Box" style="min-width: 235px; margin-right: 12px; flex-grow: 1;"><button
              class="Button Button--disabled Button--full-width Button--medium Button--theme-secondary-blue" disabled=""
              type="button"><span class="Button__content Button__content--show"><span class="Text Text--fw600 Text--"
                  style="line-height: 1.1; font-size: 18px;">Save and Finish</span></span>
              <div class="Box LoadingIndicator LoadingIndicator--three-dots Button__loading-indicator">
                <div class="LoadingIndicator__child"></div>
              </div>
            </button></div>
          <div class="Box" style="min-width: 235px; flex-grow: 1;"><button
              class="Button Button--disabled Button--full-width Button--medium Button--theme-primary" disabled=""
              type="button"><span class="Button__content Button__content--show"><span class="Text Text--fw600 Text--"
                  style="line-height: 1.1; font-size: 18px;">Save and Add Another</span></span>
              <div class="Box LoadingIndicator LoadingIndicator--three-dots Button__loading-indicator">
                <div class="LoadingIndicator__child"></div>
              </div>
            </button></div>
        </div>
      </div>
    </div>
  </div>

  <div class="MuiPaper-root publish-sidebar">
    <div class="Box PublishDrawerView">
      <div class="Box">
        <div class="Box Box--row Box--spacebetween Box--align-items-center mbm pvxxs prxxs plxl"
          style="border-bottom: 1px solid rgb(229, 230, 231);"><span class="Text Text--fw700 Text--fs18 Text--"
            style="line-height: 1.1;">Publish This Schedule</span><button
            class="Button Button--theme-link IconButton IconButton--mdClose PublishDrawerView__close"
            type="button"><span class="Button__content Button__content--show"><svg fill="currentColor"
                preserveAspectRatio="xMidYMid meet" height="15px" width="15px" viewBox="0 0 40 40"
                class="Icon Icon--mdClose IconButton__icon"
                style="vertical-align: middle; color: rgb(150, 155, 160); width: 15px; height: 15px;">
                <g>
                  <path
                    d="m31.6 10.7l-9.3 9.3 9.3 9.3-2.3 2.3-9.3-9.3-9.3 9.3-2.3-2.3 9.3-9.3-9.3-9.3 2.3-2.3 9.3 9.3 9.3-9.3z">
                  </path>
                </g>
              </svg></span>
            <div class="Box LoadingIndicator LoadingIndicator--three-dots Button__loading-indicator">
              <div class="LoadingIndicator__child"></div>
            </div>
          </button></div>
        <div class="Box phxl pbm">
          <div class="Box mbm pvs phm" style="background: rgb(246, 247, 247);">
            <div class="Box mbm"><span class="Text Text--fw700 Text--fs14 Text--" style="line-height: 1.1;">Summary: Feb
                8 - 14</span></div>
            <div class="Box">
              <div class="Box Box--row Box--spacebetween mbxs"><span class="Text Text--fs12 Text--"
                  style="line-height: 1.1;">Total Shifts:</span><span class="Text Text--fs12 Text--"
                  style="line-height: 1.1;">3</span></div>
              <div class="Box Box--row Box--spacebetween mbxs"><span class="Text Text--fs12 Text--"
                  style="line-height: 1.1;">Total Hours:</span><span class="Text Text--fs12 Text--"
                  style="line-height: 1.1;">24.00</span></div>
              <div class="Box Box--row Box--spacebetween mbxs"><span class="Text Text--fs12 Text--"
                  style="line-height: 1.1;">Total Labor Cost:</span><span class="Text Text--fs12 Text--"
                  style="line-height: 1.1;">$0.00</span></div>
            </div>
          </div>
          <div class="Box">
            <div class="Box mbxxs"><span class="Text Text--fw600 Text--fs14 Text--"
                style="line-height: 1.1;">Notifications</span></div>
            <div class="SelectInput SelectInput--hide-clear PublishDrawerView__notify-type-select">
              <div class="Select Select--single is-clearable is-searchable has-value">
                <div class="Select-control"><span class="Select-multi-value-wrapper" id="react-select-7--value">
                    <div class="Select-value"></div>
                    <div class="select-wrapper">
                      <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          Notify everyone on the team
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Notify everyone on the team</a>
                          <a class="dropdown-item" href="#"> Notify team member with changes only</a>
                          <a class="dropdown-item" href="#"> Do not notify anyone</a>
                        </div>
                      </div>

                    </div>
                  </span><span class="Select-arrow-zone"><span class="Select-arrow"></span></span></div>
              </div>
            </div>
            <div class="Box Box--row pt24">
              <div class="Box"><label class="MuiFormControlLabel-root CheckboxInput"
                  style="font-size: 14px; color: rgb(49, 58, 67);"><span
                    class="MuiButtonBase-root MuiIconButton-root jss91 MuiCheckbox-root" aria-disabled="false"
                    style="margin-right: 4px;"><span class="MuiIconButton-label"><input class="jss94" type="checkbox"
                        data-indeterminate="false" value=""></span><span class="MuiTouchRipple-root"></span></span><span
                    class="MuiTypography-root MuiFormControlLabel-label MuiTypography-body1"><span
                      class="Box"></span></span></label></div>
              <div class="Box">
                <div class="Box Box--inline"><span class="Text Text--" style="line-height: 1;"><span
                      class="Text Text--fs14 Text--" style="line-height: 1.1;">Send employees their schedule via text
                      message</span></span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="Box Box--absolute" style="width: 100%; bottom: 0px; left: 0px;">
          <div class="Box Box--borderbox pv20"
            style="border-top: 1px solid rgb(229, 230, 231); padding-left: 30px; padding-right: 30px;">
            <div class="Box mbm"><span class="Text Text--fw700 Text--fs14 Text--" style="line-height: 1.1;">Everyone on
                the team </span><span class="Text Text--fs14 Text--" style="line-height: 1.1;">will be notified once you
                publish the schedule.</span></div>
            <div class="Box"><button class="Button Button--full-width Button--theme-primary" type="button"><span
                  class="Button__content Button__content--show"><span class="Text Text--"
                    style="line-height: 1.1;">Publish</span></span>
                <div class="Box LoadingIndicator LoadingIndicator--three-dots Button__loading-indicator">
                  <div class="LoadingIndicator__child"></div>
                </div>
              </button></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="MuiPaper-root print-schedule-siderbar">
    <div class="Box PrintDrawerView pvl">
      <div class="Box Box--spacebetween Box--align-items-center mbm phxl pbm"
        style="border-bottom: 1px solid rgb(229, 230, 231);"><span class="Text Text--fw600 Text--fs18 Text--"
          style="line-height: 1.1;">Print Schedule</span><button
          class="Button Button--theme-link IconButton IconButton--mdClose PrintDrawerView__close-button"
          type="button"><span class="Button__content Button__content--show"><svg fill="currentColor"
              preserveAspectRatio="xMidYMid meet" height="15px" width="15px" viewBox="0 0 40 40"
              class="Icon Icon--mdClose IconButton__icon"
              style="vertical-align: middle; color: rgb(150, 155, 160); width: 15px; height: 15px;">
              <g>
                <path
                  d="m31.6 10.7l-9.3 9.3 9.3 9.3-2.3 2.3-9.3-9.3-9.3 9.3-2.3-2.3 9.3-9.3-9.3-9.3 2.3-2.3 9.3 9.3 9.3-9.3z">
                </path>
              </g>
            </svg></span>
          <div class="Box LoadingIndicator LoadingIndicator--three-dots Button__loading-indicator">
            <div class="LoadingIndicator__child"></div>
          </div>
        </button></div>
      <div class="Box phxl">
        <div class="Box mbm"><span class="Text Text--fs14 Text--" style="line-height: 1.1;">How would you like to print
            your schedule?</span></div>
        <div class="Box Box--pointer PrintDrawerView__option mbm pas"
          style="border: 1px solid rgb(229, 230, 231); border-radius: 2px;">
          <div class="Box mbxxxs"><span class="Text Text--fw700 Text--fs14 Text--blue Text--"
              style="line-height: 1.1;">White Background and Black Text</span></div>
          <div class="Box"><span class="Text Text--fs12 Text--" style="line-height: 1.1;">Does Not Include Any
              Color</span></div>
        </div>
        <div class="Box Box--pointer PrintDrawerView__option mbm pas"
          style="border: 1px solid rgb(229, 230, 231); border-radius: 2px;">
          <div class="Box mbxxxs"><span class="Text Text--fw700 Text--fs14 Text--blue Text--"
              style="line-height: 1.1;">With Full Color Background</span></div>
          <div class="Box"><span class="Text Text--fs12 Text--" style="line-height: 1.1;">Includes Filled Shift
              Colors</span></div>
        </div>
        <div class="Box Box--pointer PrintDrawerView__option mbm pas"
          style="border: 1px solid rgb(229, 230, 231); border-radius: 2px;">
          <div class="Box mbxxxs"><span class="Text Text--fw700 Text--fs14 Text--blue Text--"
              style="line-height: 1.1;">With Colored Borders</span></div>
          <div class="Box"><span class="Text Text--fs12 Text--" style="line-height: 1.1;">Includes Shift Colored
              Outlines</span></div>
        </div>
      </div>
    </div>
  </div>
  <div id="optionsWrapper" style="display: none;">
    <div class="arrow"></div>
    <div class="webui-popover-inner">
      <div>
        <div>
          <div class="new-shift-popover light-popover new-shift-popover--new-version">
            <div class="content js-content">
              <section class="first-section">
                <div class="user-title">
                  <div class="avatar micro">
                    <img src="/admin/assets/img/kb_medium.png">
                    <div class="opacity-border"></div>
                  </div>
                  <div class="user-name mid">
                    kevin b.
                    <p class="mbn">
                    </p>
                  </div>
                </div>
              </section>

              <div class="type mhm mbs mtxxl border-b mtxxxs">
                <div class="switcher switcher--link-style">
                  <div class="link">
                    <div class="input-wrapper">
                      <input checked="" id="custom-form" name="form-type" type="radio" value="custom">
                      <label for="custom-form">
                        Custom
                      </label>
                    </div>
                  </div>
                  <div class="link">
                    <div class="input-wrapper">
                      <input id="examples-form" name="form-type" type="radio" value="examples">
                      <label for="examples-form">
                        Common
                      </label>
                    </div>
                  </div>
                  <div class="link">
                    <div class="input-wrapper">
                      <input id="time-off-form" name="form-type" type="radio" value="time-off">
                      <label for="time-off-form">
                        Time Off
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <section class="errors clearfix">
                <div class="alert alert-error hide js-form-alert">
                  <a class="close close-icon js-close-popover">�</a>
                  <div class="message"></div>
                </div>
              </section>
              <div class="custom-shift-form" style="display: block;">
                <div class="phm">
                  <div class="pbs display-flex">
                    <div class="flex1">
                      <div class="display-flex time-range-select">
                        <div class="flex4">
                          <select class="form-select" aria-label="Default select example">
                            <option selected>12:00 AM</option>
                            <option value="1">12:00 AM</option>
                            <option value="2">12:15 AM</option>
                            <option value="3">12:45 AM</option>
                            <option value="3">12:45 AM</option>
                            <option value="3">12:45 AM</option>
                            <option value="3">12:45 AM</option>
                          </select>
                        </div>
                        <div class="flex1 bg--gray-medium text--center text--l text--white">
                          -
                        </div>
                        <div class="flex4">
                          <select class="form-select" aria-label="Default select example">
                            <option selected>12:00 AM</option>
                            <option value="1">12:00 AM</option>
                            <option value="2">12:15 AM</option>
                            <option value="3">12:45 AM</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="flex1 flex1--mobile"></div>
                  </div>
                  <div class="pbs display-flex">
                    <div class="js-roles flex3">
                      <input name="role_id" type="hidden">
                      <div class="role-selector js-role-select">
                        <select class="form-select" aria-label="Default select example">
                          <option selected>No Role</option>
                          <option value="1">Create New Role</option>
                        </select>
                      </div>
                      <input class="js-role-name-field small role-name-field hidden" maxlength="16"
                        placeholder="Role Name..." type="text">
                    </div>
                    <div class="flex">
                      <div class="select-color mlm">
                        <div class="select-color__trigger js-color-select-trigger" onclick="colorPicker()">
                          <input class="js-color-select-input" name="color" type="hidden" value="blue">
                          <div class="js-color-select-current-value select-color__block blue"></div>
                        </div>
                        <div class="select-color__list js-color-select-list">
                          <div class="blue js-color-select-block select-color__block select-color__block--selectable"
                            data-color="blue">
                            <div
                              class="select-color__checkmark js-select-color-check fa fa-check select-color__checkmark--selected">
                            </div>
                          </div>
                          <div class="blue js-color-select-block select-color__block select-color__block--selectable "
                            data-color="blue2">
                          </div>
                          <div class="blue js-color-select-block select-color__block select-color__block--selectable "
                            data-color="blue2">
                          </div>
                          <div class="blue js-color-select-block select-color__block select-color__block--selectable "
                            data-color="blue2">
                          </div>
                          <div class="blue js-color-select-block select-color__block select-color__block--selectable "
                            data-color="blue2">
                          </div>
                          <div class="blue js-color-select-block select-color__block select-color__block--selectable "
                            data-color="blue2">
                          </div>
                          <div class="blue js-color-select-block select-color__block select-color__block--selectable "
                            data-color="blue2">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="pbs">
                    <div class="text--s mbxs text--medium">
                      Apply to:
                    </div>
                    <ul>
                      <li class="inline-block">
                        <input class="day-picker js-copy-shift-day-checkbox" id="copy-day-monday" name="monday"
                          type="checkbox">
                        <label for="copy-day-monday">
                          M
                        </label>
                      </li>
                      <li class="inline-block">
                        <input class="day-picker js-copy-shift-day-checkbox" id="copy-day-tuesday" name="tuesday"
                          type="checkbox">
                        <label for="copy-day-tuesday">
                          T
                        </label>
                      </li>
                      <li class="inline-block">
                        <input class="day-picker js-copy-shift-day-checkbox" id="copy-day-wednesday" name="wednesday"
                          type="checkbox">
                        <label for="copy-day-wednesday">
                          W
                        </label>
                      </li>
                      <li class="inline-block">
                        <input class="day-picker js-copy-shift-day-checkbox" id="copy-day-thursday" name="thursday"
                          type="checkbox">
                        <label for="copy-day-thursday">
                          T
                        </label>
                      </li>
                      <li class="inline-block">
                        <input class="day-picker js-copy-shift-day-checkbox" id="copy-day-friday" name="friday"
                          type="checkbox">
                        <label for="copy-day-friday">
                          F
                        </label>
                      </li>
                      <li class="inline-block">
                        <input class="day-picker js-copy-shift-day-checkbox" id="copy-day-saturday" name="saturday"
                          type="checkbox">
                        <label for="copy-day-saturday">
                          S
                        </label>
                      </li>
                      <li class="inline-block">
                        <input class="day-picker js-copy-shift-day-checkbox" id="copy-day-sunday" name="sunday"
                          type="checkbox">
                        <label for="copy-day-sunday">
                          S
                        </label>
                      </li>
                    </ul>
                  </div>
                  <div class="pbs">
                    <div class="mtm">
                      <div class="text--s text--medium inline-block">
                        <div id="react-purple-star-wrapper_shift-notes">
                          <div class="Box Box--inline">
                            <div class="Box Box--row">
                              <div class="Box"><span class="Text Text--" style="line-height: 3;">Shift Notes:</span>
                              </div>
                              <div class="Box mt4">
                                <div class="Box inline"><svg fill="currentColor" preserveAspectRatio="xMidYMid meet"
                                    height="12" width="12" viewBox="0 0 40 40"
                                    class="Icon Icon--infoCircle PurpleStarWrapper__tooltip"
                                    style="vertical-align: middle; color: rgb(4, 162, 189); width: 12px; height: 12px;">
                                    <g>
                                      <path
                                        d="m25.9 30.7v-3.6q0-0.3-0.2-0.5t-0.6-0.2h-2.1v-11.4q0-0.3-0.2-0.5t-0.5-0.2h-7.2q-0.3 0-0.5 0.2t-0.2 0.5v3.6q0 0.3 0.2 0.5t0.5 0.2h2.2v7.1h-2.2q-0.3 0-0.5 0.2t-0.2 0.5v3.6q0 0.3 0.2 0.5t0.5 0.2h10q0.4 0 0.6-0.2t0.2-0.5z m-2.9-20v-3.6q0-0.3-0.2-0.5t-0.5-0.2h-4.3q-0.3 0-0.5 0.2t-0.2 0.5v3.6q0 0.3 0.2 0.5t0.5 0.2h4.3q0.3 0 0.5-0.2t0.2-0.5z m14.3 9.3q0 4.7-2.3 8.6t-6.3 6.2-8.6 2.3-8.6-2.3-6.2-6.2-2.3-8.6 2.3-8.6 6.2-6.2 8.6-2.3 8.6 2.3 6.3 6.2 2.3 8.6z">
                                      </path>
                                    </g>
                                  </svg></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <textarea class="shift-notes--textarea shift-notes--textarea__discoverability" name="notes"
                        placeholder="Leave a note for your employees about special chores, trainings, events or projects. They will see it when they clock in."></textarea>
                    </div>
                  </div>
                  <div class="pbs text--right">
                    <a id="js-submit" class="js-submit btn btn-success-action phxxxl pvxs heap--schedule-2 text-white">
                      Add
                    </a>
                  </div>
                </div>
                <div class="ui-timepicker-wrapper" tabindex="-1"
                  style="position: absolute; top: 105px;; left: 21px; display: none;">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">12:00 AM</option>
                    <option value="2">12:15 AM</option>
                    <option value="3">12:45 AM</option>
                  </select>

                </div>
                <div class="ui-timepicker-wrapper" tabindex="-1"
                  style="position: absolute; top: 105px;; left: 127.969px; display: none;">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">12:00 AM</option>
                    <option value="2">12:15 AM</option>
                    <option value="3">12:45 AM</option>
                  </select>
                </div>
              </div>
              <div class="shift-examples-form" style="display: none;">
                <section class="last-section">
                  <div class="clearfix">
                    <label class="shift-examples-form__label text--navy">
                      <input class="hidden" name="common_shift" type="radio" value="550198669">
                      <div class="text--s text--bold">
                        9:00 AM - 7:45 PM
                      </div>
                      <div class="text--s mtxxxs">
                        <div class="shift-examples-form__color-block blue"></div>
                        <span class="role-name text--regular shift-examples-form__role-name">

                          No Role
                        </span>
                      </div>
                    </label>
                    <label class="shift-examples-form__label text--navy">
                      <input class="hidden" name="common_shift" type="radio" value="550198645">
                      <div class="text--s text--bold">
                        9:00 AM - 5:00 PM
                      </div>
                      <div class="text--s mtxxxs">
                        <div class="shift-examples-form__color-block blue"></div>
                        <span class="role-name text--regular shift-examples-form__role-name">

                          No Role
                        </span>
                      </div>
                    </label>
                    <label class="shift-examples-form__label text--navy">
                      <input class="hidden" name="common_shift" type="radio" value="549693934">
                      <div class="text--s text--bold">
                        9:00 AM - 5:00 PM
                      </div>
                      <div class="text--s mtxxxs">
                        <div class="shift-examples-form__color-block red"></div>
                        <span class="role-name text--regular shift-examples-form__role-name">

                          No Role
                        </span>
                      </div>
                    </label>
                    <label class="shift-examples-form__label text--navy">
                      <input class="hidden" name="common_shift" type="radio" value="549685820">
                      <div class="text--s text--bold">
                        9:00 AM - 5:00 PM
                      </div>
                      <div class="text--s mtxxxs">
                        <div class="shift-examples-form__color-block red"></div>
                        <span class="role-name text--regular shift-examples-form__role-name">

                          No Role
                        </span>
                      </div>
                    </label>
                    <label class="shift-examples-form__label text--navy">
                      <input class="hidden" name="common_shift" type="radio" value="549685822">
                      <div class="text--s text--bold">
                        9:00 AM - 5:00 PM
                      </div>
                      <div class="text--s mtxxxs">
                        <div class="shift-examples-form__color-block red"></div>
                        <span class="role-name text--regular shift-examples-form__role-name">

                          No Role
                        </span>
                      </div>
                    </label>
                  </div>
                </section>
                <section class="js-details">
                  <div class="phs">
                    <div class="text--s mbxs text--medium">
                      Apply to:
                    </div>
                    <ul>
                      <li class="inline-block">
                        <input class="day-picker js-copy-shift-day-checkbox" id="copy-day-monday-example" name="monday"
                          type="checkbox">
                        <label for="copy-day-monday-example">
                          M
                        </label>
                      </li>
                      <li class="inline-block">
                        <input class="day-picker js-copy-shift-day-checkbox" id="copy-day-tuesday-example"
                          name="tuesday" type="checkbox">
                        <label for="copy-day-tuesday-example">
                          T
                        </label>
                      </li>
                      <li class="inline-block">
                        <input class="day-picker js-copy-shift-day-checkbox" id="copy-day-wednesday-example"
                          name="wednesday" type="checkbox">
                        <label for="copy-day-wednesday-example">
                          W
                        </label>
                      </li>
                      <li class="inline-block">
                        <input class="day-picker js-copy-shift-day-checkbox" id="copy-day-thursday-example"
                          name="thursday" type="checkbox">
                        <label for="copy-day-thursday-example">
                          T
                        </label>
                      </li>
                      <li class="inline-block">
                        <input class="day-picker js-copy-shift-day-checkbox" id="copy-day-friday-example" name="friday"
                          type="checkbox">
                        <label for="copy-day-friday-example">
                          F
                        </label>
                      </li>
                      <li class="inline-block">
                        <input class="day-picker js-copy-shift-day-checkbox" id="copy-day-saturday-example"
                          name="saturday" type="checkbox">
                        <label for="copy-day-saturday-example">
                          S
                        </label>
                      </li>
                      <li class="inline-block">
                        <input class="day-picker js-copy-shift-day-checkbox" id="copy-day-sunday-example" name="sunday"
                          type="checkbox">
                        <label for="copy-day-sunday-example">
                          S
                        </label>
                      </li>
                    </ul>
                  </div>
                  <div class="pas">
                    <div class="mtm">
                      <div class="text--s text--medium inline-block">
                        <div id="react-purple-star-wrapper_shift-notes"></div>
                      </div>
                      <textarea class="shift-notes--textarea shift-notes--textarea__discoverability" name="notes"
                        placeholder="Leave a note for your employees about special chores, trainings, events or projects. They will see it when they clock in."></textarea>
                    </div>
                  </div>
                  <div class="pas text--right">
                    <a class="js-submit btn btn-success-action phxxxl pvxs">
                      Add
                    </a>
                  </div>
                </section>
              </div>
              <div class="time-off-form" style="display: none;">
                <div style="height: 260px; margin-top: 140px;" class="mam text--center">
                  <div class="mbm">
                    <p class="text--italic text--sm">
                      Add a time off request to the schedule
                    </p>
                  </div>
                  <button class="time-off-form js-add-time-off btn--l btn-success-action" data-toggle="modal"
                    data-target="#exampleModalCenter">
                    Add Time-Off
                  </button>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="eventContent" style="display: none;">
    <form class="mal schedule_builder__events__form">
      <section>
        <div class="alert alert-error hide js-form-alert">
          <a class="close">�</a>
          <div class="message"></div>
        </div>
      </section>
      <div class="text--m text--medium mbm">
        <span class="mrm">
          Add Event
        </span>
        <span class="text--xs text--gray-dark">
          Wed, Feb 10
        </span>
      </div>
      <section class="mbxs text--xxs">
        You've used 1 of 2 free Events this month.
        <a class="js-metering-location-events-learn-more">
          Learn more.
        </a>
      </section>
      <section>
        <label>
          Event Title
        </label>
        <input class="calendar-clone-input" name="title" required="" type="text" value="">
        <label class="mtm">
          Event Description
        </label>
        <textarea class="auto-height border-box full-width" name="description" rows="2"></textarea>
      </section>
      <button class="btn btn-success-action btn-block mtm" type="submit">
        Add Event
      </button>
    </form>
  </div>

  <!-- Modals -->



  <div class="modal fade pr-0" id="upgradeModal" tabindex="-1" role="dialog" aria-labelledby="upgradeModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-5 p-0">
                <div class="modal-content" style="height: 100%;">
                  <img src="/admin/assets/img/modal-img.png" alt="" style="height: 100%;width: 100%;">
                </div>
              </div>
              <div class="col-md-7 p-0">
                <div class="modal-content content-um text-center">
                  <h5>
                    Optimize your schedule
                  </h5>
                  <p class="mb-4">
                    Upgrade to our Plus plan to get ahead of labor costs
                  </p>

                  <ul class=" phm">
                    <li>
                      <span>
                        Use your future sales forecasts to optimize your schedule
                      </span>
                    </li>
                    <li>
                      <span>
                        Project labor costs as a target percent of sales to control your bottom line
                      </span>
                    </li>
                    <li>
                      <span>
                        Build schedules and manage costs by department to better understand your business
                      </span>
                    </li>
                  </ul>

                  <a class="js-tier-upgrade-btn tier__upgrade-btn btn btn-block heap--tier-change-20 btn-primary non-partner-payment upgrade-tier-btn"
                    data-id="3" data-location-property="" data-name="plus" data-period=""
                    data-preloaded-discount-code="" data-price="49.95">
                    Upgrade to improve labor forecasts
                  </a>
                  <div class="text--xxs phm mt-5">
                    40+ other features included with the
                    <a class="text--capitalize" href="/" target="_blank">
                      plus
                    </a>
                    plan for $49.95/month
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('vendor-script')
  {{-- vendor files --}}

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->

  <script src="/admin/assets/js/bootstrap.min.js"></script>
  <script src="/admin/assets/js/jquery.webui-popover.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
  <script src="/admin/assets/js/jquery-ui.js"></script>
  {{-- <script src='https://raw.githubusercontent.com/bevacqua/dragula/master/dist/dragula.min.js'></script> --}}
  <script src='/admin/assets/js/dragula.min.js'></script>
  
  <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/4.3.0/jquery.bootstrap-touchspin.min.js'></script>

@endsection

@section('page-script')
  {{-- Page js files --}}

  

  <script>
    $(document).ready(function(){
      $('body').attr('id','schedule-builder-index');
    })

    $(function () {
      $("#sortable").sortable({
        handle: ".drag-on"
      });

      $("#sortable1 td").disableSelection();
    });


    dragula([document.querySelector('#left'), document.querySelector('#right')], {

      // or 'horizontal'
      direction: 'vertical',

      // determine whether to copy elements rather than moving
      // if a method is passed, it'll be called whenever an element starts being dragged in order to decide whether it should follow copy behavior or not. 
      copy: false,

      // determine whether to sort elements in copy-source containers.
      copySortSource: false,

      // spilling will put the element back where it was dragged from, if this is true
      revertOnSpill: false,

      // spilling will `.remove` the element, if this is true
      removeOnSpill: false,

      // set the element that gets mirror elements appended
      mirrorContainer: document.body,

      // allows users to select input text
      ignoreInputTextSelection: true,

      // allows users to select the amount of movement on the X axis before it is considered a drag instead of a click   
      slideFactorX: 0,

      // allows users to select the amount of movement on the Y axis before it is considered a drag instead of a click      
      slideFactorY: 0,

      // only elements in drake.containers will be taken into account
      isContainer: function (el) {
        return false;
      },

      // elements are always draggable by default
      moves: function (el, source, handle, sibling) {
        return true;
      },

      // elements can be dropped in any of the `containers` by default
      accepts: function (el, target, source, sibling) {
        return true;
      },

      // don't prevent any drags from initiating by default
      invalid: function (el, handle) {
        return false;
      }

    });
  </script>

  <script src="/admin/assets/js/main.js"></script>
  <script>
    $(function () {
      $(document).tooltip({
        position: {
          my: "center bottom-20",
          at: "center top",
          using: function (position, feedback) {
            $(this).css(position);
            $("<div>")
              .addClass("arrow")
              .addClass(feedback.vertical)
              .addClass(feedback.horizontal)
              .appendTo(this);
          }
        }
      });
    });
  </script>

  <script>
    function colorPicker() {
      $(".select-color__list").toggleClass("select-color__list--active");
    }
    function timePicker() {
      $(".ui-timepicker-wrapper").show();
    }
  </script>



@endsection
