{% if categories %}
  <div class=" main-menu">
    <nav id="menu" class="navbar">
{#       <div id="menu_toggle_section">
        <div id="burger_button">
          <svg width="50px" height="24px" viewBox="0 0 29 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>burger 2</title><g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square" stroke-linejoin="round"><g id="Group-3" transform="translate(-44.000000, -28.000000)" stroke="#FFFFFF" stroke-width="1.91304348"><g id="Group-2" transform="translate(45.000000, 29.000000)"><line x1="0" y1="21.3848941" x2="50" y2="21.3848941" id="Stroke-5"/><line x1="0" y1="10.863155" x2="50" y2="10.863155" id="Stroke-3"/><line x1="0" y1="0.341415831" x2="50" y2="0.341415831" id="Stroke-1"/></g></g></g><style xmlns="http://www.w3.org/1999/xhtml" type="text/css"></style></svg>
        </div>

        <span id="category">Menu</span>
      </div> #}
        {# <span id="category">{{ text_category }}</span> #}

      

      <div id="menu_container">
        <div class="close_menu_btn">
          {#<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">#}
          {#<metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>#}
          {#<g><path d="M990,39.9L960.1,10L500,470.2L39.9,10L10,39.9L470.2,500L10,960.1L39.9,990L500,529.9L960.1,990l29.9-29.9L529.9,500L990,39.9z"/></g>#}
          {#</svg>#}
          <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill-rule="evenodd" clip-rule="evenodd" d="M19.207 6.207a1 1 0 0 0-1.414-1.414L12 10.586 6.207 4.793a1 1 0 0 0-1.414 1.414L10.586 12l-5.793 5.793a1 1 0 1 0 1.414 1.414L12 13.414l5.793 5.793a1 1 0 0 0 1.414-1.414L13.414 12l5.793-5.793z" fill="#ffffff"></path></g></svg>
        </div>
        <div id="menu_header" class="desktop_version">
  {#         {% if logo %}
            <a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>
          {% else %}
            <h1><a href="{{ home }}">{{ name }}</a></h1>
          {% endif %} #}
        </div>

        {# ---------------------------------------------------------------------------- MENU HEADER > MOBILE VERSION : START HERE#}
        <div id="menu_header" class="mobile_version">
          <div class="header_right_section">
            <ul class="list-inline">
              {# ---------------------------------- RIGHT > LANGUAGE #}
              <li>
                {{ language }}
              </li>
              {# ---------------------------------- RIGHT > SEARCH #}
              <li class="header-icon-men search_toggle" id="search-toggle">
                <a href="#">
                  <svg viewBox="0 0 24 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>search</title><g id="Symbols" stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd"><g id="HEADER" transform="translate(-1598.000000, -66.000000)" fill="currentColor" stroke="currentColor" stroke-width="0.942857143"><g id="Group-3" transform="translate(1599.000000, 67.000000)"><path d="M12.8412452,12.2608703 C10.346946,14.9727048 6.13781613,15.1664072 3.37070297,12.7257562 C0.603589815,10.2851053 0.447696116,6.06239167 2.90302187,3.31181675 C5.35834763,0.561241839 9.60645093,0.406279872 12.3735641,2.84693085 C15.1402875,5.28758183 15.3351546,9.54903592 12.8412452,12.2608703 M13.1530326,2.03338053 C9.95721175,-0.872156355 4.96861339,-0.639713405 2.04560653,2.57574741 C-0.877400326,5.79120822 -0.643559777,10.7112507 2.59123448,13.6167876 C5.59218818,16.328622 10.1910523,16.2894941 13.1530326,13.6167876 L21.2205315,20.9 L22,20.0477092 L13.9325011,12.7644967 C16.582694,9.54903592 16.2709066,4.82269593 13.1530326,2.03338053" id="Fill-1"/></g></g></g></svg>
                  SEARCH
                </a>
              </li>
              {# ---------------------------------- RIGHT > ACCOUNT #}
              <li class="dropdown account-dropdown header-icon-men"><a href="{{ account }}" title="{{ text_account }}" class="dropdown-toggle" data-toggle="dropdown">
                <svg viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>ICON-USER</title><g id="Symbols" stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd"><g id="header" transform="translate(-1429.000000, -20.000000)" fill="currentColor" stroke="currentColor" stroke-width="1.11692308"><g id="ICON-USER" transform="translate(1430.000000, 21.000000)"><path d="M6.15997681,5.71622729 C6.15997681,3.04806827 8.33002334,0.879419583 10.9999022,0.879419583 C13.669781,0.879419583 15.8398275,3.04806827 15.8398275,5.71622729 C15.8398275,8.38262747 13.669781,10.553035 10.9999022,10.553035 C8.33002334,10.553035 6.15997681,8.38262747 6.15997681,5.71622729 M21.8131754,21.9327244 C21.9398934,21.8588532 22.0032524,21.7304579 21.9998715,21.5528151 C21.9998715,16.8004317 18.9637793,12.609118 14.447689,11.1141047 L13.6293016,10.8450023 L14.3280108,10.3402155 C15.8257477,9.26028821 16.7198139,7.53134931 16.7198139,5.71622729 C16.7198139,2.5643875 14.1537735,0 10.9999022,0 C7.84603081,0 5.27999039,2.5643875 5.27999039,5.71622729 C5.27999039,7.53134931 6.1740566,9.26028821 7.67179349,10.3402155 L8.37050272,10.8450023 L7.55387531,11.1141047 C3.036025,12.609118 3.5170281e-05,16.8004317 3.5170281e-05,21.5457798 C-0.00168814118,21.7304579 0.0599109086,21.8588532 0.186628954,21.9327244 C0.334466674,22.0224252 0.545663416,22.0224252 0.693501135,21.9327244 C0.820219181,21.8588532 0.88181823,21.7304579 0.880058258,21.5528151 C0.880058258,15.9702596 5.42078822,11.4324546 10.9999022,11.4324546 C16.5807761,11.4324546 21.1197461,15.9702596 21.1197461,21.5457798 C21.1162261,21.7304579 21.1795851,21.8588532 21.3063032,21.9327244 C21.4541409,22.0224252 21.6653376,22.0224252 21.8131754,21.9327244" id="Fill-1"/></g></g></g></svg>
                {% if logged %}{{ header_logo_icon }}{% else %}{{ header_logn_icon }}{% endif %}</a>
                <ul class="dropdown-menu dropdown-menu-right">
                  {% if logged %}
                  <li><a href="{{ account }}">{{ text_account }}</a></li>
                  <li><a href="{{ order }}">{{ text_order }}</a></li>
                  <li><a href="{{ transaction }}">{{ text_transaction }}</a></li>
                  <li><a href="{{ download }}">{{ text_download }}</a></li>
                  <li><a href="{{ logout }}">{{ text_logout }}</a></li>
                  {% else %}
                  <li><a href="{{ register }}">{{ text_register }}</a></li>
                  <li><a href="{{ login }}">{{ text_login }}</a></li>
                  {% endif %}
                </ul>
              </li>
              
            </ul>
          </div>
        </div>
        {# ---------------------------------------------------------------------------- MENU HEADER > MOBILE VERSION : END HERE #}


 {#        <div id="menu_close_button">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="50px" height="50px"><path d="M 40.783203 7.2714844 A 2.0002 2.0002 0 0 0 39.386719 7.8867188 L 25.050781 22.222656 L 10.714844 7.8867188 A 2.0002 2.0002 0 0 0 9.2792969 7.2792969 A 2.0002 2.0002 0 0 0 7.8867188 10.714844 L 22.222656 25.050781 L 7.8867188 39.386719 A 2.0002 2.0002 0 1 0 10.714844 42.214844 L 25.050781 27.878906 L 39.386719 42.214844 A 2.0002 2.0002 0 1 0 42.214844 39.386719 L 27.878906 25.050781 L 42.214844 10.714844 A 2.0002 2.0002 0 0 0 40.783203 7.2714844 z"/></svg>
        </div>
 #}
        <ul class="nav navbar-nav">

          {% for category in categories %}{# -------------- LEVEL #1 -------------- #}
          
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

                        {% for child in children %}{# -------------- LEVEL #2 -------------- #}

                          {% if child.children %}

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
                                    {% for chch in child.children %}{# -------------- LEVEL #3 -------------- #}
                                    {% if chch.children %}
                                          <li class="dropdown">
                                              <a href="{{ chch.href }}" class="" data-toggle="">{{ chch.name }}
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
                                                          <a href="{{ chch.href }}" class="" data-toggle="">{{ chch.name }}</a>
                                                      </div>
                                                      <ul class="list-unstyled">
                                                          {% for chchch in chch.children %}{# -------------- LEVEL #4 -------------- #}
                                                              <li><a href="{{ chchch.href }}">{{ chchch.name }}</a></li>
                                                          {% endfor %}
                                                      </ul>
                                                  </div>
                                              </div>
                                          <li>
                                      {% else %}
                                          <li><a href="{{ chch.href }}">{{ chch.name }}</a></li>
                                      {% endif %}
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
          
       
        </div>


      
      
      
    </nav>

  </div>
{% endif %} 

