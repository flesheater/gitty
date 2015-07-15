This is a nice and easy implementation of curl getting list of github user repos.

In order to make the script work - just change the defined constants at the top:

	USER 
	from the url of your github: https://api.github.com/users/USER/repos

	TOKEN    
	A token that you could generate from your own github account 
	go here https://github.com/settings/applications and create a token
	then replace the TOKEN constant value in the script


Then you could nudge it to suit your needs.

Hope it helps someone!

---------------------------------------------------------
An example of the return from the API (17.05.2014):
---------------------------------------------------------
```php
Array
(
    [0] => stdClass Object
        (
            [id] => 11426411
            [name] => adsrandom
            [full_name] => flesheater/adsrandom
            [owner] => stdClass Object
                (
                    [login] => flesheater
                    [id] => 1736402
                    [avatar_url] => https://avatars.githubusercontent.com/u/1736402?
                    [gravatar_id] => 6ee9e5c1e07230514d5eedf0a4fc4f0d
                    [url] => https://api.github.com/users/flesheater
                    [html_url] => https://github.com/flesheater
                    [followers_url] => https://api.github.com/users/flesheater/followers
                    [following_url] => https://api.github.com/users/flesheater/following{/other_user}
                    [gists_url] => https://api.github.com/users/flesheater/gists{/gist_id}
                    [starred_url] => https://api.github.com/users/flesheater/starred{/owner}{/repo}
                    [subscriptions_url] => https://api.github.com/users/flesheater/subscriptions
                    [organizations_url] => https://api.github.com/users/flesheater/orgs
                    [repos_url] => https://api.github.com/users/flesheater/repos
                    [events_url] => https://api.github.com/users/flesheater/events{/privacy}
                    [received_events_url] => https://api.github.com/users/flesheater/received_events
                    [type] => User
                    [site_admin] => 
                )

            [private] => 
            [html_url] => https://github.com/flesheater/adsrandom
            [description] => A simple Drupal module for preventing a node to be showed twice if you have 2 view blocks in a page randomly showing the same content
            [fork] => 
            [url] => https://api.github.com/repos/flesheater/adsrandom
            [forks_url] => https://api.github.com/repos/flesheater/adsrandom/forks
            [keys_url] => https://api.github.com/repos/flesheater/adsrandom/keys{/key_id}
            [collaborators_url] => https://api.github.com/repos/flesheater/adsrandom/collaborators{/collaborator}
            [teams_url] => https://api.github.com/repos/flesheater/adsrandom/teams
            [hooks_url] => https://api.github.com/repos/flesheater/adsrandom/hooks
            [issue_events_url] => https://api.github.com/repos/flesheater/adsrandom/issues/events{/number}
            [events_url] => https://api.github.com/repos/flesheater/adsrandom/events
            [assignees_url] => https://api.github.com/repos/flesheater/adsrandom/assignees{/user}
            [branches_url] => https://api.github.com/repos/flesheater/adsrandom/branches{/branch}
            [tags_url] => https://api.github.com/repos/flesheater/adsrandom/tags
            [blobs_url] => https://api.github.com/repos/flesheater/adsrandom/git/blobs{/sha}
            [git_tags_url] => https://api.github.com/repos/flesheater/adsrandom/git/tags{/sha}
            [git_refs_url] => https://api.github.com/repos/flesheater/adsrandom/git/refs{/sha}
            [trees_url] => https://api.github.com/repos/flesheater/adsrandom/git/trees{/sha}
            [statuses_url] => https://api.github.com/repos/flesheater/adsrandom/statuses/{sha}
            [languages_url] => https://api.github.com/repos/flesheater/adsrandom/languages
            [stargazers_url] => https://api.github.com/repos/flesheater/adsrandom/stargazers
            [contributors_url] => https://api.github.com/repos/flesheater/adsrandom/contributors
            [subscribers_url] => https://api.github.com/repos/flesheater/adsrandom/subscribers
            [subscription_url] => https://api.github.com/repos/flesheater/adsrandom/subscription
            [commits_url] => https://api.github.com/repos/flesheater/adsrandom/commits{/sha}
            [git_commits_url] => https://api.github.com/repos/flesheater/adsrandom/git/commits{/sha}
            [comments_url] => https://api.github.com/repos/flesheater/adsrandom/comments{/number}
            [issue_comment_url] => https://api.github.com/repos/flesheater/adsrandom/issues/comments/{number}
            [contents_url] => https://api.github.com/repos/flesheater/adsrandom/contents/{+path}
            [compare_url] => https://api.github.com/repos/flesheater/adsrandom/compare/{base}...{head}
            [merges_url] => https://api.github.com/repos/flesheater/adsrandom/merges
            [archive_url] => https://api.github.com/repos/flesheater/adsrandom/{archive_format}{/ref}
            [downloads_url] => https://api.github.com/repos/flesheater/adsrandom/downloads
            [issues_url] => https://api.github.com/repos/flesheater/adsrandom/issues{/number}
            [pulls_url] => https://api.github.com/repos/flesheater/adsrandom/pulls{/number}
            [milestones_url] => https://api.github.com/repos/flesheater/adsrandom/milestones{/number}
            [notifications_url] => https://api.github.com/repos/flesheater/adsrandom/notifications{?since,all,participating}
            [labels_url] => https://api.github.com/repos/flesheater/adsrandom/labels{/name}
            [releases_url] => https://api.github.com/repos/flesheater/adsrandom/releases{/id}
            [created_at] => 2013-07-15T15:23:02Z
            [updated_at] => 2013-09-16T12:24:38Z
            [pushed_at] => 2013-09-16T12:24:32Z
            [git_url] => git://github.com/flesheater/adsrandom.git
            [ssh_url] => git@github.com:flesheater/adsrandom.git
            [clone_url] => https://github.com/flesheater/adsrandom.git
            [svn_url] => https://github.com/flesheater/adsrandom
            [homepage] => 
            [size] => 108
            [stargazers_count] => 0
            [watchers_count] => 0
            [language] => PHP
            [has_issues] => 1
            [has_downloads] => 1
            [has_wiki] => 1
            [forks_count] => 0
            [mirror_url] => 
            [open_issues_count] => 0
            [forks] => 0
            [open_issues] => 0
            [watchers] => 0
            [default_branch] => master
            [permissions] => stdClass Object
                (
                    [admin] => 1
                    [push] => 1
                    [pull] => 1
                )

        )

    [1] => stdClass Object
        (
            [id] => 13413453
            [name] => currency_exchange_module
            [full_name] => flesheater/currency_exchange_module
            [owner] => stdClass Object
                (
                    [login] => flesheater
                    [id] => 1736402
                    [avatar_url] => https://avatars.githubusercontent.com/u/1736402?
                    [gravatar_id] => 6ee9e5c1e07230514d5eedf0a4fc4f0d
                    [url] => https://api.github.com/users/flesheater
                    [html_url] => https://github.com/flesheater
                    [followers_url] => https://api.github.com/users/flesheater/followers
                    [following_url] => https://api.github.com/users/flesheater/following{/other_user}
                    [gists_url] => https://api.github.com/users/flesheater/gists{/gist_id}
                    [starred_url] => https://api.github.com/users/flesheater/starred{/owner}{/repo}
                    [subscriptions_url] => https://api.github.com/users/flesheater/subscriptions
                    [organizations_url] => https://api.github.com/users/flesheater/orgs
                    [repos_url] => https://api.github.com/users/flesheater/repos
                    [events_url] => https://api.github.com/users/flesheater/events{/privacy}
                    [received_events_url] => https://api.github.com/users/flesheater/received_events
                    [type] => User
                    [site_admin] => 
                )

            [private] => 
            [html_url] => https://github.com/flesheater/currency_exchange_module
            [description] => A simple block with ajax currency converter in it.
            [fork] => 
            [url] => https://api.github.com/repos/flesheater/currency_exchange_module
            [forks_url] => https://api.github.com/repos/flesheater/currency_exchange_module/forks
            [keys_url] => https://api.github.com/repos/flesheater/currency_exchange_module/keys{/key_id}
            [collaborators_url] => https://api.github.com/repos/flesheater/currency_exchange_module/collaborators{/collaborator}
            [teams_url] => https://api.github.com/repos/flesheater/currency_exchange_module/teams
            [hooks_url] => https://api.github.com/repos/flesheater/currency_exchange_module/hooks
            [issue_events_url] => https://api.github.com/repos/flesheater/currency_exchange_module/issues/events{/number}
            [events_url] => https://api.github.com/repos/flesheater/currency_exchange_module/events
            [assignees_url] => https://api.github.com/repos/flesheater/currency_exchange_module/assignees{/user}
            [branches_url] => https://api.github.com/repos/flesheater/currency_exchange_module/branches{/branch}
            [tags_url] => https://api.github.com/repos/flesheater/currency_exchange_module/tags
            [blobs_url] => https://api.github.com/repos/flesheater/currency_exchange_module/git/blobs{/sha}
            [git_tags_url] => https://api.github.com/repos/flesheater/currency_exchange_module/git/tags{/sha}
            [git_refs_url] => https://api.github.com/repos/flesheater/currency_exchange_module/git/refs{/sha}
            [trees_url] => https://api.github.com/repos/flesheater/currency_exchange_module/git/trees{/sha}
            [statuses_url] => https://api.github.com/repos/flesheater/currency_exchange_module/statuses/{sha}
            [languages_url] => https://api.github.com/repos/flesheater/currency_exchange_module/languages
            [stargazers_url] => https://api.github.com/repos/flesheater/currency_exchange_module/stargazers
            [contributors_url] => https://api.github.com/repos/flesheater/currency_exchange_module/contributors
            [subscribers_url] => https://api.github.com/repos/flesheater/currency_exchange_module/subscribers
            [subscription_url] => https://api.github.com/repos/flesheater/currency_exchange_module/subscription
            [commits_url] => https://api.github.com/repos/flesheater/currency_exchange_module/commits{/sha}
            [git_commits_url] => https://api.github.com/repos/flesheater/currency_exchange_module/git/commits{/sha}
            [comments_url] => https://api.github.com/repos/flesheater/currency_exchange_module/comments{/number}
            [issue_comment_url] => https://api.github.com/repos/flesheater/currency_exchange_module/issues/comments/{number}
            [contents_url] => https://api.github.com/repos/flesheater/currency_exchange_module/contents/{+path}
            [compare_url] => https://api.github.com/repos/flesheater/currency_exchange_module/compare/{base}...{head}
            [merges_url] => https://api.github.com/repos/flesheater/currency_exchange_module/merges
            [archive_url] => https://api.github.com/repos/flesheater/currency_exchange_module/{archive_format}{/ref}
            [downloads_url] => https://api.github.com/repos/flesheater/currency_exchange_module/downloads
            [issues_url] => https://api.github.com/repos/flesheater/currency_exchange_module/issues{/number}
            [pulls_url] => https://api.github.com/repos/flesheater/currency_exchange_module/pulls{/number}
            [milestones_url] => https://api.github.com/repos/flesheater/currency_exchange_module/milestones{/number}
            [notifications_url] => https://api.github.com/repos/flesheater/currency_exchange_module/notifications{?since,all,participating}
            [labels_url] => https://api.github.com/repos/flesheater/currency_exchange_module/labels{/name}
            [releases_url] => https://api.github.com/repos/flesheater/currency_exchange_module/releases{/id}
            [created_at] => 2013-10-08T13:00:39Z
            [updated_at] => 2013-10-08T13:08:12Z
            [pushed_at] => 2013-10-08T13:08:10Z
            [git_url] => git://github.com/flesheater/currency_exchange_module.git
            [ssh_url] => git@github.com:flesheater/currency_exchange_module.git
            [clone_url] => https://github.com/flesheater/currency_exchange_module.git
            [svn_url] => https://github.com/flesheater/currency_exchange_module
            [homepage] => 
            [size] => 100
            [stargazers_count] => 0
            [watchers_count] => 0
            [language] => PHP
            [has_issues] => 1
            [has_downloads] => 1
            [has_wiki] => 1
            [forks_count] => 0
            [mirror_url] => 
            [open_issues_count] => 0
            [forks] => 0
            [open_issues] => 0
            [watchers] => 0
            [default_branch] => master
            [permissions] => stdClass Object
                (
                    [admin] => 1
                    [push] => 1
                    [pull] => 1
                )

        )
)
```
