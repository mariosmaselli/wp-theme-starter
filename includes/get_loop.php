<?php


class get_loop {
    
	public function __construct( $args =  array( 'post_type' => 'post' ), $prefix = "" ) {
       
        $this->args = $args;
        $this->prefix = $prefix;
       
    }

    public function loop_block_output() {
       
        $this->loop_block_content ();
       
    }

    public function loop_content() {
    	
    	global $post;
		$content = '';

		echo apply_filters( $this->prefix . 'loop_filter', $content);

	}

    public function loop_block_content () { 

    	global $post;
		global $dataorder;
		global $max;	
		global $count;

		$loop = new WP_Query( $this->args );
		
		$max = $loop->max_num_pages;   
        $dataorder = 0;
        
		do_action(  $this->prefix . 'before_loop' );

		if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();	
			
			$id = get_the_ID();  
			$post_type = get_post_type($id); 
        
	        $this->loop_content ();
 
 
		++$dataorder; 
		endwhile; 
		endif;
		wp_reset_postdata();
   		wp_reset_query();

   		do_action(  $this->prefix . 'after_loop' );
    }

}