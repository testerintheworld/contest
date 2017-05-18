type arr= array [1..200000] of string;
var a, e: string;
    c, b: arr;
    i, n, j, m: integer;
procedure sor(s: arr; h: integer; var w: arr);
var i, v: integer;
    l: string;
begin
for v:= 1 to j do
for i:= 2 to j do begin
if (length(s[i]))> (length(s[i-1])) then begin
                                     l:= s[i-1];
                                     s[i-1]:= s[i];
                                     s[i]:= l;
                                     end
end;
for i:= 1 to n do w[i]:= s[i];
end;
begin
 readln(a);
 n:= length(a);
 inc(n);
 j:=0;
 e:= '';
 a:= a+' ';
 for i:= 1 to length(a) do begin
 if a[i] = ' ' then begin
                    inc(j);
                    c[j]:= e;
                    e:= '';
                    end
               else e:= a[i] + e;
end;               
sor (c, j,b);
for i:= 1 to j do write(b[i], '     ');
end.
               
               