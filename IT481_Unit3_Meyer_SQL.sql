use [Northwind]
create role CEOROLE
GO
GRANT ALTER ON [dbo].[Employees] TO [CEORole]
GO
use [Northwind]
GO
GRANT DELETE ON [dbo].[Employees] TO [CEORole]
GO
use [Northwind]
GO
GRANT INSERT ON [dbo].[Employees] TO [CEORole]
GO
use [Northwind]
GO
GRANT SELECT ON [dbo].[Employees] TO [CEORole]
GO
use [Northwind]
GO
GRANT UPDATE ON [dbo].[Employees] TO [CEORole]
GO
use [Northwind]
GO
GRANT ALTER ON [dbo].[Orders] TO [CEORole]
GO
use [Northwind]
GO
GRANT DELETE ON [dbo].[Orders] TO [CEORole]
GO
use [Northwind]
GO
GRANT INSERT ON [dbo].[Orders] TO [CEORole]
GO
use [Northwind]
GO
GRANT SELECT ON [dbo].[Orders] TO [CEORole]
GO
use [Northwind]
GO
GRANT UPDATE ON [dbo].[Orders] TO [CEORole]
GO
use [Northwind]
GO
GRANT ALTER ON [dbo].[Customers] TO [CEORole]
GO
use [Northwind]
GO
GRANT DELETE ON [dbo].[Customers] TO [CEORole]
GO
use [Northwind]
GO
GRANT INSERT ON [dbo].[Customers] TO [CEORole]
GO
use [Northwind]
GO
GRANT SELECT ON [dbo].[Customers] TO [CEORole]
GO
use [Northwind]
GO
GRANT UPDATE ON [dbo].[Customers] TO [CEORole]
GO
create role HRROLE
go
use [Northwind]
GO
DENY ALTER ON [dbo].[Orders] TO [HRROLE]
GO
use [Northwind]
GO
DENY DELETE ON [dbo].[Orders] TO [HRROLE]
GO
use [Northwind]
GO
DENY INSERT ON [dbo].[Orders] TO [HRROLE]
GO
use [Northwind]
GO
DENY SELECT ON [dbo].[Orders] TO [HRROLE]
GO
use [Northwind]
GO
DENY UPDATE ON [dbo].[Orders] TO [HRROLE]
GO
use [Northwind]
GO
GRANT ALTER ON [dbo].[Employees] TO [HRROLE]
GO
use [Northwind]
GO
GRANT DELETE ON [dbo].[Employees] TO [HRROLE]
GO
use [Northwind]
GO
GRANT INSERT ON [dbo].[Employees] TO [HRROLE]
GO
use [Northwind]
GO
GRANT SELECT ON [dbo].[Employees] TO [HRROLE]
GO
use [Northwind]
GO
GRANT UPDATE ON [dbo].[Employees] TO [HRROLE]
GO
use [Northwind]
GO
DENY ALTER ON [dbo].[Customers] TO [HRROLE]
GO
use [Northwind]
GO
DENY DELETE ON [dbo].[Customers] TO [HRROLE]
GO
use [Northwind]
GO
DENY INSERT ON [dbo].[Customers] TO [HRROLE]
GO
use [Northwind]
GO
DENY SELECT ON [dbo].[Customers] TO [HRROLE]
GO
use [Northwind]
GO
DENY UPDATE ON [dbo].[Customers] TO [HRROLE]
GO
use [Northwind]
create role SalesRole
GO
GRANT ALTER ON [dbo].[Customers] TO [SalesRole]
GO
use [Northwind]
GO
GRANT DELETE ON [dbo].[Customers] TO [SalesRole]
GO
use [Northwind]
GO
GRANT INSERT ON [dbo].[Customers] TO [SalesRole]
GO
use [Northwind]
GO
GRANT SELECT ON [dbo].[Customers] TO [SalesRole]
GO
use [Northwind]
GO
GRANT UPDATE ON [dbo].[Customers] TO [SalesRole]
GO
use [Northwind]
GO
GRANT ALTER ON [dbo].[Orders] TO [SalesRole]
GO
use [Northwind]
GO
GRANT DELETE ON [dbo].[Orders] TO [SalesRole]
GO
use [Northwind]
GO
GRANT INSERT ON [dbo].[Orders] TO [SalesRole]
GO
use [Northwind]
GO
GRANT SELECT ON [dbo].[Orders] TO [SalesRole]
GO
use [Northwind]
GO
GRANT UPDATE ON [dbo].[Orders] TO [SalesRole]
GO
use [Northwind]
GO
DENY ALTER ON [dbo].[Employees] TO [SalesRole]
GO
use [Northwind]
GO
DENY INSERT ON [dbo].[Employees] TO [SalesRole]
GO
use [Northwind]
GO
DENY SELECT ON [dbo].[Employees] TO [SalesRole]
GO
use [Northwind]
GO
DENY UPDATE ON [dbo].[Employees] TO [SalesRole]
GO
USE [Northwind]
create login User_CEO
GO
USE [Northwind]
GO
ALTER ROLE [CEORole] ADD MEMBER [User_CEO]
GO
create login User_Sales
Alter role SalesRole add member User_Sales
create login User_HR 
alter role HRRole add member User_HR


