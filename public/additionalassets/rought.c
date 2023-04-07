pr = address of first tuple of relation r;
ps = address of first of relation s;
while (ps!=null && pr!=null) do begin
	 ts = tuple to which ps points;
	 Ss = {ts};
	set ps to point the next tuple of relation s;
	done = false;
	while (!done && ps!=null) do begin
		ts? = tuple to which ps points;
		 if (ts?[JoinAttrs] = ts[JoinAttrs])
		   begin
			Ss = Ss U {ts?};
			set ps to point the next tuple of relation s;
			end
		else
		    done = true;
	end
   tr = tuple to which pr points;
   while (pr !=null && tr [JoinAttrs] < ts[JoinAttrs]) do begin
	for each ts in Ss do begin
	      add ts   ⋈    tr to result;
	  end
	set pr to point nest tuple of r;
          tr = tuple to which pr points;
         end
