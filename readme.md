## Pinoy Cubers

[Planned]Features

1. **Unofficial Records** - Compare your record time with other cubers in the Philippines. We will verify your record time and post it on the unofficial Philippine records list
2. **Learning Resources** - Share algorithms and checkout the algorithm database. Watch/Read puzzle solving tutorials
3. **Events** - Check upcoming official competitions and see results online. View the calendar for cubemeets near you
4. **Group Discussions** - Participate in online group discussions about your favorite puzzles
5. **User Profiles** - Contribute to the community and earn badges. Post your personal bests and tell something about yourself
6. **Events** - Check upcoming official competitions and see results online. View the calendar for cubemeets near you
7. **Online Competitions** - Compete online with your friend on your favorite puzzles in real time. Host and join a competition using the web interface

## Installation Instructions
1. Clone repository
 
		git clone https://bitbucket.org/geocine/pinoycubers.git

3. Install dependencies. Make sure you have composer installed.

		composer install

4. Create virtual host 

		<VirtualHost *:80>
		    DocumentRoot "C:\xampp\htdocs\pinoycubers\public"
		    ServerName pinoycubers.org
		    <Directory "C:\xampp\htdocs\pinoycubers\public">
				Options Indexes FollowSymLinks Includes ExecCGI
				AllowOverride All
				Order allow,deny
				Allow from all
		    </Directory>
		</VirtualHost>
5. Add pinoycubers.org to host file.
		
		127.0.0.1 pinoycubers.org

6. Visit url http://pinoycubers.org

## Commit Message Rules

1. **Why is this change necessary?**

	This question tells what to expect in the commit, allowing them to more easily identify and point out unrelated changes.

2. **How does it address the issue?**

	Describe, at a high level, what was done to affect change. 
	`Introduce a red/black tree to increase search speed` 
	or
	`Remove <troublesome gem X>, which was causing <specific description of issue introduced by gem>` 
	are good examples.
	
	If your change is obvious, you may be able to omit addressing this question.

3. The body should provide a meaningful commit message, which **uses the imperative, present tense** "change", not "changed" or "changes". See example in #2

## Notes
1. You may use http://crunchapp.net/ for compiling less files. We only need to compile `bootstrap.less` and `site.less`
