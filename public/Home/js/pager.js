
function makePager(pageIndex, total, pagesize, spanInterval) {
            //创建分页  
            //将总记录数结果 得到 总页码数  
            var pageS = total;
            if (pageS %pagesize==0) pageS = pageS /pagesize;  
            else pageS = parseInt(total / pagesize) + 1;
            if (pageIndex > pageS) pageIndex = pageS;
            var pager="";  
  
            pager += "<div class='message'><i class='blue' id='recordcount'>" + total + "</i>条记录，当前显示第&nbsp;<i class='blue' id='page'>" + pageIndex + "&nbsp;</i>页";
            pager+="，共&nbsp;<i class='blue' id='page'>" + pageS + "&nbsp;</i>页</div>";
            pager+="<ul class='paginList' id='pagelist'>";
            //添加第一页  
            //if (pageIndex ==1)  
            //    pager+="<li class='paginItem'><a href='javascript:;'><span class='pagepre'></span></a></li>";  
            //else {  
            //    pager += "<li class='paginItem'><a href='javascript:void(0)' first='" + 1 + "'><span class='pagepre'></span></a></li>";
            //}  
  
  
            if (pageS == 1) {   //如果只有一页
                pager += "<li class='paginItem current'><a href='javascript:;'><span class='pagepre'></span></a></li>";
                pager += "<li class='paginItem current'><a href='javascript:;'>1</a></li>";
                pager += "<li class='paginItem current'><a href='javascript:;'><span class='pagenxt'></span></a></li>";
            } else {
                //添加上一页
                if (pageIndex == 1)
                    pager += "<li class='paginItem current'><a href='javascript:;'><span class='pagepre'></span></a></li>";
                else {
                    pager += "<li class='paginItem'><a href='javascript:loaddata(" + (pageIndex - 1) + ");' pre='" + (pageIndex - 1) + "'><span class='pagepre'></span></a></li>";
                }

                //设置分页的格式  这里可以根据需求完成自己想要的结果  
                var interval = parseInt(spanInterval); //设置间隔  
                var start = Math.max(1, pageIndex - interval); //设置起始页  
                var end = Math.min(pageIndex + interval, pageS)//设置末页  

                if (pageIndex < interval + 1) {
                    end = (2 * interval + 1) > pageS ? pageS : (2 * interval + 1);
                }

                if ((pageIndex + interval) > pageS) {
                    start = (pageS - 2 * interval) < 1 ? 1 : (pageS - 2 * interval);

                }

                //生成页码  
                for (var j = start; j < end + 1; j++) {
                    if (j == pageIndex) {
                        pager += "<li class='paginItem current'><a href='javascript:;'>" + j + "</a></li>"
                    } //if   
                    else {
                        pager += "<li class='paginItem'><a href='javascript:loaddata(" + j + ");'>" + j + "</a></li>"
                    } //else  
                } //for  

                //下一页  
                if (pageIndex == pageS) {
                    pager += "<li class='paginItem current'><a href='javascript:;'><span class='pagenxt'></span></a></li>";
                }
                else {
                    pager += "<li class='paginItem'><a href='javascript:loaddata(" + (pageIndex + 1) + ");'><span class='pagenxt'></span></a></li>";
                }
            }
            //最后一页  
            //if (pageIndex == pageS) {  
            //    pager+="<span class='disabled'>最后一页</span>";  
            //}  
            //else {  
            //    pager+="<a href='javascript:void(0)' last='" + pageS + "'>最后一页</a>";
            //}  

            pager += "</ul>";

            return pager;
        } 