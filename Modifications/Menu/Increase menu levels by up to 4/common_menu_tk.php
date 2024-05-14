{% if categories %}
  <div class="container main-menu">
    <nav id="menu" class="navbar">
      <div id="menu_toggle_section">
        <div id="burger_button">
          <svg width="32.3706294px" height="23px" viewBox="0 0 32.3706294 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>Group</title>
              <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                  <g id="MENU" transform="translate(-1.500000, -5.805944)" stroke="#FFFFFF" stroke-width="3">
                      <g id="Group" transform="translate(3.000000, 7.000000)">
                          <line x1="1.77635684e-15" y1="0.305944056" x2="29.3706294" y2="0.305944056" id="Stroke-1"></line>
                          <line x1="1.77635684e-15" y1="10.3059441" x2="29.3706294" y2="10.3059441" id="Stroke-3"></line>
                          <line x1="1.77635684e-15" y1="20.3059441" x2="29.3706294" y2="20.3059441" id="Stroke-5"></line>
                      </g>
                  </g>
              </g> 
          </svg>
        </div>
        {# <span id="category">{{ text_category }}</span> #}
        <span id="category">Menu</span>
      </div>
      <div id="menu_container">
        <div class="language-switcher visible-xs">{{ language }}</div>
        <div id="menu_close_button">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="50px" height="50px"><path d="M 40.783203 7.2714844 A 2.0002 2.0002 0 0 0 39.386719 7.8867188 L 25.050781 22.222656 L 10.714844 7.8867188 A 2.0002 2.0002 0 0 0 9.2792969 7.2792969 A 2.0002 2.0002 0 0 0 7.8867188 10.714844 L 22.222656 25.050781 L 7.8867188 39.386719 A 2.0002 2.0002 0 1 0 10.714844 42.214844 L 25.050781 27.878906 L 39.386719 42.214844 A 2.0002 2.0002 0 1 0 42.214844 39.386719 L 27.878906 25.050781 L 42.214844 10.714844 A 2.0002 2.0002 0 0 0 40.783203 7.2714844 z"/></svg>
        </div>
        <div id="menu_header" class="desktop_version">
          <a href=""><img src="/image/catalog/logos/logo-menu.png" title="" alt="" class="img-responsive"></a>
        </div>
        <ul class="nav navbar-nav">
          {% for category in categories %}
          {# -------------- LEVEL #1 -------------- #}
            {% if category.children %}
              <li class="dropdown">
                <a href="{{ category.href }}" class="" data-toggle="">{{ category.name }}
                  <div class="toggle_arrow">
                    <svg fill="%23ffffff" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve"><path id="XMLID_27_" d="M15,180h263.787l-49.394,49.394c-5.858,5.857-5.858,15.355,0,21.213C232.322,253.535,236.161,255,240,255  s7.678-1.465,10.606-4.394l75-75c5.858-5.857,5.858-15.355,0-21.213l-75-75c-5.857-5.857-15.355-5.857-21.213,0  c-5.858,5.857-5.858,15.355,0,21.213L278.787,150H15c-8.284,0-15,6.716-15,15S6.716,180,15,180z"/><g stroke="white"></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                  </div>
                </a>
                <div class="dropdown-menu">
                  <div class="dropdown-inner">
                    <div class="parent_header">
                      <div class="arrow_back">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve"><path id="XMLID_27_" d="M15,180h263.787l-49.394,49.394c-5.858,5.857-5.858,15.355,0,21.213C232.322,253.535,236.161,255,240,255  s7.678-1.465,10.606-4.394l75-75c5.858-5.857,5.858-15.355,0-21.213l-75-75c-5.857-5.857-15.355-5.857-21.213,0  c-5.858,5.857-5.858,15.355,0,21.213L278.787,150H15c-8.284,0-15,6.716-15,15S6.716,180,15,180z"/><g stroke="white"></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                      </div>
                      <a href="{{ category.href }}" class="" data-toggle="">{{ category.name }}</a>
                    </div>
                    {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}
                      <ul class="list-unstyled">
                        {% for child in children %}
                        {# -------------- LEVEL #2 -------------- #}
                          {% if child.ch_of_ch %}
                            <li class="dropdown">
                              <a href="{{ child.href }}" class="" data-toggle="">{{ child.name }}
                                <div class="toggle_arrow">
                                  <svg fill="%23ffffff" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve"><path id="XMLID_27_" d="M15,180h263.787l-49.394,49.394c-5.858,5.857-5.858,15.355,0,21.213C232.322,253.535,236.161,255,240,255  s7.678-1.465,10.606-4.394l75-75c5.858-5.857,5.858-15.355,0-21.213l-75-75c-5.857-5.857-15.355-5.857-21.213,0  c-5.858,5.857-5.858,15.355,0,21.213L278.787,150H15c-8.284,0-15,6.716-15,15S6.716,180,15,180z"/><g stroke="white"></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                </div>
                              </a>
                              <div class="dropdown-menu">
                                <div class="dropdown-inner">
                                  <div class="parent_header">
                                    <div class="arrow_back">
                                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve"><path id="XMLID_27_" d="M15,180h263.787l-49.394,49.394c-5.858,5.857-5.858,15.355,0,21.213C232.322,253.535,236.161,255,240,255  s7.678-1.465,10.606-4.394l75-75c5.858-5.857,5.858-15.355,0-21.213l-75-75c-5.857-5.857-15.355-5.857-21.213,0  c-5.858,5.857-5.858,15.355,0,21.213L278.787,150H15c-8.284,0-15,6.716-15,15S6.716,180,15,180z"/><g stroke="white"></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                    </div>
                                    <a href="{{ child.href }}" class="" data-toggle="">{{ child.name }}</a>
                                  </div>
                                  <ul class="list-unstyled">
                                    {% for chch in child.ch_of_ch %}
                                    {# -------------- LEVEL #3 -------------- #}
                                      <li><a href="{{ chch.href }}">{{ chch.name }}</a></li>
                                    {% endfor %}
                                  </ul>
                                </div>
                              </div>
                            <li>
                          {% else %}
                            <li>
                              <a href="{{ child.href }}">{{ child.name }}</a>
                            </li>
                          {% endif %}
                        {% endfor %}
                      </ul>
                    {% endfor %}
                  </div>
                </div>
              </li>
            {% else %}
              <li>
                <a href="{{ category.href }}">{{ category.name }}</a>
              </li>
            {% endif %}
          {% endfor %}
        </ul>
        <div class="extra-menu-links">
          <ul>
            {#<li><a href="/index.php?route=information/information&information_id=9">{{ company_info.title }}</a></li>#}
            {#<li><a href="/index.php?route=information/contact">{{ text_contact }}</a></li>#}
            <li><a href="/index.php?route=information/information&information_id=11">KΑΤΑΣΤΗΜΑΤΑ</a></li>
            {# <li><a href="#" target="_blank">BLOG</a></li> #}
            <li><a href="#" target="_blank">ΕΝΤΟΠΙΣΜΟΣ ΠΑΡΑΓΓΕΛΙΑΣ</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
{% endif %}
