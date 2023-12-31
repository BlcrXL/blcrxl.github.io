begin tran
create table tmp_catalog (pic varchar(250))
bulk insert tmp_catalog from 'E:\AlexUnimportant\xl-shop.github.io\list.dir'
update tmp_catalog set pic = replace(pic, 'E:\AlexUnimportant\xl-shop.github.io\clip_previews\', '')

-- not identity columns for both dicts
declare @brandName varchar(100) = 'XtraLoon'
declare @brandId int = (select id from catalogBrands where brand = @brandName)
if @brandId is null begin
  insert catalogBrands (Id, Brand) values (1, @brandName)
  set @brandId = 1
end

declare @typeName varchar(100) = 'Inflatable fetish'
declare @typeId int = (select id from catalogTypes where Type = @typeName)
if @typeId is null begin
  insert catalogTypes (Id, Type) values (1, @typeName)
  set @typeId = 1
end

delete catalog
insert catalog (name, description, price, pictureUri, catalogTypeId, catalogBrandId)
  select pic, pic, 1.5, pic, @typeId, @brandId from tmp_catalog
update catalog set PictureUri = 'http://catalogbaseurltobereplaced' + PictureUri
update catalog set sortIndex = id
drop table tmp_catalog
if xact_state() = 1 commit