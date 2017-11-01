<% var date = getCookie('DATE');
var dateArr = {'أي وقت':'any', 'آخر ساعة':'one', 'آخر ٢٤ ساعة':'24', 'الأسبوع الماضي':'week', 'الشهر الماضي':'month', 'السنة الماضية':'year'};

for(i in dateArr){
var chked = '';
if(dateArr[i] == 'any' && trim(date) == ''){
	chked = 'checked';
} else if(dateArr[i] == 'one' && trim(date) == 'one'){
	chked = 'checked';
} else if(dateArr[i] == '24' && trim(date) == '24'){
	chked = 'checked';
} else if(dateArr[i] == 'week' && trim(date) == 'week'){
	chked = 'checked';
} else if(dateArr[i] == 'month' && trim(date) == 'month'){
	chked = 'checked';
} else if(dateArr[i] == 'year' && trim(date) == 'year'){
	chked = 'checked';
} %>
<li>
	<a href="javascript:void(0);">
	<input type="checkbox" id="date_<%= dateArr[i] %>" class="cbox_date" <%= chked %> onclick="checkboxDate(<%= '\''+dateArr[i]+'\',\'check\'' %>);filterRequest(<%= '\'time\'' %>);"/>
	<font onClick="checkBox(<%= '\'date_'+dateArr[i]+'\'' %>);checkboxDate(<%= '\''+dateArr[i]+'\',\'text\'' %>);filterRequest(<%= '\'time\'' %>);" >&nbsp;<%= i %></font>
	</a>
</li>	
<% }
var dt = '';
if(trim(date).indexOf(':')!=-1){
	var dt=trim(date).split(':');
} %>
<li>
    <a href="javascript:void(0);">
	<input type="checkbox" id="date_custom" class="cbox_date"  onClick="checkboxcustom(<%= '\'custom_date\',\'date_custom\',\'\'' %>);" <% if(dt){ %> checked="checked"<% } %> />
	<font onClick="checkBox(<%= '\'date_custom\'' %>);checkboxcustom(<%= '\'custom_date\',\'date_custom\',\'\'' %>);" >&nbsp;حدد النطاق</font>
    </a>
</li>
<div id="custom_date" <% if(!dt){ %>style="display:none;"<% } %>>
	<div  class="cdate_div_cls">
		<input type="text" id="frm"  value="<%= dt[0] %>" placeholder="From" class="form-control"/><br/>
		<input type="text" id="to" value="<%= dt[1] %>" placeholder="To" class="form-control"/>
	</div>
	<div  class="cdate_btn_div" style="text-align:center;margin-top: 5px;cursor:pointer">
		<button class="btn btn-primary cdate_btn"  onclick="checkboxrange(<%= '\'custom_range\',\'text\'' %>);">Search</button>
	</div>
</div>