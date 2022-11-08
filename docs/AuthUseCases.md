## Common

1. Use CQS (Common Query Segregation).
2. Command send via POST HTTP request.
3. Query send via GET HTTP request.

## Use case:

1. Sign up by email:
	1. Request registration.
	2. Confirm by token.

2. Reset password:
	1. Request via email.
	2. Reset password. Reset only if token is not expired!.

3. Change email (?):
	1. Request.
	2. Confirm via confirmation email to old address..

4. Change role (only for admin).
