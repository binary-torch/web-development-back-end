$('#signUp').form({
                inline: true,
                on: 'blur',
                fields: {
                    password2: {
                        identifier: 'password2',
                        rules: [
                            {
                                type: 'match[password]',
                                prompt: 'Password not match!'
                            }
                        ]
                    },
                    password: {
                        identifier: 'password',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Password cannot be empty!'
                            }
                        ]
                    },
                    name: {
                        identifier: 'name',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Please write your name!'
                            }
                        ]
                    },
                    email: {
                        identifier: 'email',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Please write your email!'
                            },
                            {
                                type: 'email',
                                prompt: 'Please enter a valid e-mail address'
                            }
                        ]
                    }
                }
            });