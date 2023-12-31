-- select * from catalog where name like '%00024%' or id = 100 or name like '%8416%'

declare @name varchar(255) = 'O209\8416.gif'
declare @insertAfter int = 99

declare @typeId int, @brandId int, @i int
select top 1 @typeId = catalogTypeId, @brandId = catalogBrandId from catalog
insert catalog (name, description, price, pictureUri, catalogTypeId, catalogBrandId) values (@name, @name, 1.5, 'http://catalogbaseurltobereplaced' + @name, @typeId, @brandId)
set @i = (select max(sortIndex) from catalog)
while @i > @insertAfter begin
  update catalog set sortIndex = @i + 1 where sortIndex = @i
  set @i = @i - 1
end
update catalog set sortIndex = @insertAfter + 1 where sortIndex is null