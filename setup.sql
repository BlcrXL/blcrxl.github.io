alter table catalog drop constraint pk_catalog;
alter table catalog drop column id;
alter table catalog add id int not null identity(1,1);
alter table catalog add constraint pk_catalog primary key (id);

insert settings values ('PicBaseUrl', 'https://blcrxl.github.io/xl-shop/clip_previews/')

delete settings where name in ('MailSendHost', 'MailSendPort', 'MailUser', 'MailPassword')

-- still doesn't work
insert settings values ('MailSendHost' , 'smtp.gmail.com')
insert settings values ('MailSendPort' , '587')
insert settings values ('MailUser' , 'alexxng@gmail.com')
insert settings values ('MailPassword' , 'spectre80#')

insert settings values ('MailSendHost' , 'smtp.mail.ru')
insert settings values ('MailSendPort' , '587')
insert settings values ('MailUser' , 'byseq@mail.ru')
insert settings values ('MailPassword' , 'laputing12')

delete settings where name in ('OrderMailSubject', 'OrderMailBody')
insert settings values ('OrderMailSubject' , 'XtraLoon-Shop order # {0}')
insert settings values ('OrderMailBody' , 'You will be contacted in some hours for price negotiation and payment details.
Price is about 1 USD for "worse" clips (w/o good B2Ps), 1.5 USD for B2P clips and 2-3 USD for mass-popping (S2P, etc) or special clips.
Your order is:
{0}')

create database db1_tmp
CREATE TABLE [dbo].[Catalog](
	[Name] [nvarchar](50) NOT NULL,
	[Description] [nvarchar](max) NULL,
	[Price] [decimal](18, 2) NOT NULL,
	[PictureUri] [nvarchar](max) NULL,
	[CatalogTypeId] [int] NOT NULL,
	[CatalogBrandId] [int] NOT NULL,
	[id] [int] IDENTITY(1,1) NOT NULL)